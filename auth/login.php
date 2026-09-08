<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

iniciar_sessao_segura();
header('Cache-Control: no-store, max-age=0');
header('X-Content-Type-Options: nosniff');

$erro = '';
$retornar = proxima_pagina_valida($_GET['retornar'] ?? $_POST['retornar'] ?? null);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $csrfValido = hash_equals($_SESSION['csrf'] ?? '', (string) ($_POST['csrf'] ?? ''));
    $bloqueadoAte = (int) ($_SESSION['login_bloqueado_ate'] ?? 0);

    if (!$csrfValido) {
        $erro = 'Não foi possível validar a solicitação. Atualize a página e tente novamente.';
    } elseif ($bloqueadoAte > time()) {
        $erro = 'Muitas tentativas. Aguarde alguns minutos para tentar novamente.';
    } else {
        $usuario = trim((string) ($_POST['usuario'] ?? ''));
        $senha = (string) ($_POST['senha'] ?? '');
        $conta = null;

        if ($usuario !== '' && mb_strlen($usuario) <= 80 && $senha !== '') {
            $consulta = banco_ctg()->prepare('SELECT id, usuario, senha_hash FROM usuarios WHERE usuario = :usuario LIMIT 1');
            $consulta->execute(['usuario' => $usuario]);
            $conta = $consulta->fetch();
        }

        if ($conta && password_verify($senha, $conta['senha_hash'])) {
            session_regenerate_id(true);
            $_SESSION['usuario_id'] = (int) $conta['id'];
            $_SESSION['usuario'] = $conta['usuario'];
            $_SESSION['autenticado_em'] = time();
            unset($_SESSION['tentativas_login'], $_SESSION['login_bloqueado_ate']);
            header('Location: ' . (site_base_path() ?: '') . '/' . $retornar, true, 303);
            exit;
        }

        $tentativas = (int) ($_SESSION['tentativas_login'] ?? 0) + 1;
        $_SESSION['tentativas_login'] = $tentativas;
        if ($tentativas >= 5) {
            $_SESSION['login_bloqueado_ate'] = time() + 900;
            $_SESSION['tentativas_login'] = 0;
        }
        $erro = 'Usuário ou senha inválidos.';
    }
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2a1c12">
  <title>Entrar | CTG Sentinela da Serra</title>
  <link rel="stylesheet" href="assets/css/shared/visual.css">
  <link rel="stylesheet" href="assets/css/shared/mobile.css">
  <link rel="stylesheet" href="assets/css/pages/acesso.css?v=27">
</head>
<body>
  <main class="acesso">
    <h1>Guia do<br>Concorrente</h1>
    <form class="login-form" action="acesso.html" method="post">
      <input type="hidden" name="csrf" value="<?= escapar(token_csrf()) ?>">
      <input type="hidden" name="retornar" value="<?= escapar($retornar) ?>">
      <?php if ($erro !== ''): ?>
        <p class="login-erro" role="alert"><?= escapar($erro) ?></p>
      <?php endif; ?>
      <label for="usuario">Usuário</label>
      <input autocomplete="username" id="usuario" maxlength="80" name="usuario" required type="text">
      <label for="senha">Senha</label>
      <input autocomplete="current-password" id="senha" name="senha" required type="password">
      <button class="botao" type="submit">Entrar <span aria-hidden="true"></span></button>
    </form>
    <p class="aviso">O acesso é liberado somente para usuários autorizados pela organização.</p>
  </main>
</body>
</html>
