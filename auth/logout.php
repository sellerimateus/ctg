<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

iniciar_sessao_segura();
$_SESSION = [];

if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params['path'], '', (bool) $params['secure'], (bool) $params['httponly']);
}

session_destroy();
header('Location: ' . (site_base_path() ?: '') . '/acesso.php', true, 303);
exit;
