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

    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');

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

    $host = getenv('CTG_DB_HOST') ?: '127.0.0.1';
    $nomeBanco = getenv('CTG_DB_NAME') ?: 'ctg';
    $usuario = getenv('CTG_DB_USER') ?: 'root';
    $senha = getenv('CTG_DB_PASSWORD') ?: '';

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
    return isset($_SESSION['usuario_id'], $_SESSION['usuario']);
}

function proxima_pagina_valida(?string $pagina): string
{
    $permitidas = [
        'escolha-modalidade.html',
        'guia-concorrente.html',
        'guia-prenda.html',
        'prova-campeira.html',
        'prova-artistica.html',
        'prova-escrita.html',
        'modelo-versos-reserva.html',
    ];

    return in_array($pagina, $permitidas, true) ? $pagina : 'escolha-modalidade.html';
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
