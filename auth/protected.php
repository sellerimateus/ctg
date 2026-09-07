<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

iniciar_sessao_segura();

$pagina = proxima_pagina_valida($_GET['pagina'] ?? null);
if (($pagina ?? '') !== ($_GET['pagina'] ?? null)) {
    http_response_code(404);
    exit('Página não encontrada.');
}

exigir_login($pagina);

$arquivo = dirname(__DIR__) . DIRECTORY_SEPARATOR . $pagina;
if (!is_file($arquivo)) {
    http_response_code(404);
    exit('Página não encontrada.');
}

header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('Cache-Control: private, no-store, max-age=0');
readfile($arquivo);
