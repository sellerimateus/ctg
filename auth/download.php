<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

iniciar_sessao_segura();
exigir_login('prova-campeira.php');

$arquivoSolicitado = (string) ($_GET['arquivo'] ?? '');
$arquivosPermitidos = [
    'tranca.pdf',
    'charque.pdf',
    'poncho.pdf',
    'encilha.pdf',
];

if (!in_array($arquivoSolicitado, $arquivosPermitidos, true)) {
    http_response_code(404);
    exit('Material não encontrado.');
}

$arquivo = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'pdf'
    . DIRECTORY_SEPARATOR . $arquivoSolicitado;

if (!is_file($arquivo)) {
    http_response_code(404);
    exit('Material não encontrado.');
}

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="' . rawurlencode($arquivoSolicitado) . '"');
header('X-Content-Type-Options: nosniff');
header('Cache-Control: private, no-store, max-age=0');
header('X-Robots-Tag: noindex, nofollow');
header('Content-Length: ' . (string) filesize($arquivo));
readfile($arquivo);
exit;
