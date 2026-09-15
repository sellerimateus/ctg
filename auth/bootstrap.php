<?php
declare(strict_types=1);

function site_base_path(): string
{
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    $authPosition = strpos($script, '/auth/');

    if ($authPosition !== false) {
        return rtrim(substr($script, 0, $authPosition), '/');
    }

    return rtrim(dirname($script), '/');
}

function iniciar_sessao_segura(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }

    // O cabeçalho X-Forwarded-Proto só deve ser aceito por um proxy confiável.
    // Nesta instalação, a origem HTTPS é determinada pelo próprio Apache.
    $https = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';

    ini_set('session.use_strict_mode', '1');
    ini_set('session.use_only_cookies', '1');

    session_name('CTGSESSID');
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => site_base_path() ?: '/',
        'secure' => $https,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

function banco_ctg(): PDO
{
    static $pdo = null;

    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $arquivoConfiguracao = getenv('CTG_CONFIG_FILE')
        ?: dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'ctg-db.php';
    $configuracao = is_file($arquivoConfiguracao) ? require $arquivoConfiguracao : [];

    if (!is_array($configuracao)) {
        throw new RuntimeException('Configuração de banco inválida.');
    }

    $host = $configuracao['host'] ?? getenv('CTG_DB_HOST') ?: '';
    $nomeBanco = $configuracao['database'] ?? getenv('CTG_DB_NAME') ?: '';
    $usuario = $configuracao['username'] ?? getenv('CTG_DB_USER') ?: '';
    $senha = $configuracao['password'] ?? getenv('CTG_DB_PASSWORD');

    $host = is_string($host) ? $host : '';
    $nomeBanco = is_string($nomeBanco) ? $nomeBanco : '';
    $usuario = is_string($usuario) ? $usuario : '';

    if ($host === '' || $nomeBanco === '' || $usuario === '' || !is_string($senha) || $senha === '') {
        throw new RuntimeException('Credenciais do banco não configuradas.');
    }

    $pdo = new PDO(
        "mysql:host={$host};dbname={$nomeBanco};charset=utf8mb4",
        $usuario,
        $senha,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );

    return $pdo;
}

function token_csrf(): string
{
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf'];
}

function usuario_autenticado(): bool
{
    if (!isset($_SESSION['usuario_id'], $_SESSION['usuario'], $_SESSION['autenticado_em'])) {
        return false;
    }

    $agora = time();
    $autenticadoEm = (int) $_SESSION['autenticado_em'];
    $ultimaAtividade = (int) ($_SESSION['ultima_atividade'] ?? $autenticadoEm);

    // 30 minutos sem uso ou no máximo 8 horas de sessão autenticada.
    if ($agora - $ultimaAtividade > 1800 || $agora - $autenticadoEm > 28800) {
        $_SESSION = [];
        session_destroy();
        return false;
    }

    $_SESSION['ultima_atividade'] = $agora;
    return true;
}

function chave_limitacao_login(string $usuario): string
{
    $ip = filter_var($_SERVER['REMOTE_ADDR'] ?? '', FILTER_VALIDATE_IP) ?: 'desconhecido';
    return hash('sha256', mb_strtolower(trim($usuario), 'UTF-8') . '|' . $ip);
}

function login_bloqueado(PDO $pdo, string $chave): bool
{
    try {
        $consulta = $pdo->prepare('SELECT bloqueado_ate FROM login_tentativas WHERE chave = :chave LIMIT 1');
        $consulta->execute(['chave' => $chave]);
        $registro = $consulta->fetch();
    } catch (PDOException $erro) {
        // O bloqueio por sessão continua ativo enquanto a migração do banco
        // não estiver disponível; a falha fica registrada no log do servidor.
        error_log('Rate limit persistente indisponível: ' . $erro->getMessage());
        return false;
    }

    return $registro && $registro['bloqueado_ate'] !== null
        && strtotime((string) $registro['bloqueado_ate']) > time();
}

function registrar_falha_login(PDO $pdo, string $chave): void
{
    $pdo->beginTransaction();

    try {
        $consulta = $pdo->prepare(
            'SELECT tentativas, inicio_janela FROM login_tentativas WHERE chave = :chave FOR UPDATE'
        );
        $consulta->execute(['chave' => $chave]);
        $registro = $consulta->fetch();
        $agora = new DateTimeImmutable('now');
        $inicioJanela = $registro ? new DateTimeImmutable((string) $registro['inicio_janela']) : $agora;
        $tentativas = !$registro || $inicioJanela < $agora->sub(new DateInterval('PT15M'))
            ? 1
            : (int) $registro['tentativas'] + 1;
        $bloqueadoAte = $tentativas >= 5 ? $agora->add(new DateInterval('PT15M'))->format('Y-m-d H:i:s') : null;

        if ($registro) {
            $atualizar = $pdo->prepare(
                'UPDATE login_tentativas
                 SET tentativas = :tentativas, inicio_janela = :inicio, bloqueado_ate = :bloqueado
                 WHERE chave = :chave'
            );
            $atualizar->execute([
                'tentativas' => $tentativas,
                'inicio' => $agora->format('Y-m-d H:i:s'),
                'bloqueado' => $bloqueadoAte,
                'chave' => $chave,
            ]);
        } else {
            $inserir = $pdo->prepare(
                'INSERT INTO login_tentativas (chave, tentativas, inicio_janela, bloqueado_ate)
                 VALUES (:chave, :tentativas, :inicio, :bloqueado)'
            );
            $inserir->execute([
                'chave' => $chave,
                'tentativas' => $tentativas,
                'inicio' => $agora->format('Y-m-d H:i:s'),
                'bloqueado' => $bloqueadoAte,
            ]);
        }

        $pdo->commit();
    } catch (Throwable $erro) {
        if ($pdo->inTransaction()) {
            $pdo->rollBack();
        }
        error_log('Rate limit persistente indisponível: ' . $erro->getMessage());
    }
}

function limpar_limitacao_login(PDO $pdo, string $chave): void
{
    try {
        $consulta = $pdo->prepare('DELETE FROM login_tentativas WHERE chave = :chave');
        $consulta->execute(['chave' => $chave]);
    } catch (PDOException $erro) {
        error_log('Rate limit persistente indisponível: ' . $erro->getMessage());
    }
}

function proxima_pagina_valida(?string $pagina): string
{
    $permitidas = [
        'escolha-modalidade.php',
        'guia-concorrente.php',
        'guia-prenda.php',
        'prova-campeira.php',
        'prova-artistica.php',
        'prova-escrita.php',
        'modelo-versos-reserva.php',
    ];

    return in_array($pagina, $permitidas, true) ? $pagina : 'escolha-modalidade.php';
}

function exigir_login(string $destino): void
{
    if (usuario_autenticado()) {
        return;
    }

    $login = (site_base_path() ?: '') . '/acesso.php';
    header('Location: ' . $login . '?retornar=' . rawurlencode(proxima_pagina_valida($destino)), true, 303);
    exit;
}

function escapar(?string $texto): string
{
    return htmlspecialchars((string) $texto, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
