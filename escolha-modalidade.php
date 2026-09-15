<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2a1c12">
  <meta name="description" content="Escolha a modalidade para acessar o Guia do Concorrente.">
  <title>Escolha sua modalidade | CTG Sentinela da Serra</title>
  <link rel="stylesheet" href="assets/css/global.css?v=1">
  <script defer src="assets/js/visual.js?v=2"></script>  <script defer src="assets/js/escolha-modalidade.js"></script>
</head>
<body class="pagina-escolha-modalidade estilo-guia-concorrente">
  <a class="skip-link" href="#conteudo">Ir para o conteúdo</a>
  <div class="topo-faixa" aria-hidden="true"></div>

  <?php
$paginaAtual = 'escolha-modalidade';
$tipoMenu = 'guia';
require __DIR__ . '/includes/header.php';
?>

  <main id="conteudo">
    <section class="modalidade-hero" aria-labelledby="titulo-modalidade">
      <div class="container">
        <div class="modalidade-chamada">
      <h1 id="titulo-modalidade">Escolha sua modalidade</h1>
          <p>Cada modalidade possui um espaço de estudo, com organização e materiais relacionados.</p>
        </div>

      </div>
    </section>

    <section class="modalidade-escolha" aria-label="Escolha entre Peão e Prenda">
      <div class="container">
        <div class="modalidade-secao-cabecalho"></div>
        <div class="modalidade-cartoes" aria-label="Escolha a modalidade">
          <a class="modalidade-cartao peao" href="guia-concorrente.php?modalidade=peao" data-escolha="peao">
            <span class="modalidade-numero">01</span>
            <span class="modalidade-titulo">Peão</span>
            <span class="modalidade-descricao">Campo, cultura, compromisso e representação.</span>
            <span class="modalidade-entrar">Entrar como Peão <b>→</b></span>
          </a>

          <a class="modalidade-cartao prenda" href="guia-prenda.php" data-escolha="prenda">
            <span class="modalidade-numero">02</span>
            <span class="modalidade-titulo">Prenda</span>
            <span class="modalidade-descricao">Conhecimento, arte, tradição e presença.</span>
            <span class="modalidade-entrar">Entrar como Prenda <b>→</b></span>
          </a>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer rodape-social">
<div class="container">
<div class="rodape-social-grid">
<div class="rodape-identidade">
<!-- EDITAR AQUI: título "CTG Sentinela da Serra" --><h2>CTG Sentinela da Serra</h2>
<small class="rodape-cnpj">CNPJ: 00.000.000/0000-00</small>
</div>
<div class="rodape-redes">
<!-- EDITAR AQUI: título "Redes sociais" --><h3>Redes sociais</h3>
<div class="rodape-redes-links">
<!-- EDITAR AQUI: link/botão "Instagram @ctg_sentineladaserra" | href="https://www.instagram.com/ctg_sentineladaserra?igsh=MWh3dzB1bW16Mmw0aQ==" --><a aria-label="Instagram do CTG Sentinela da Serra" class="rodape-rede" href="https://www.instagram.com/ctg_sentineladaserra?igsh=MWh3dzB1bW16Mmw0aQ==" rel="noopener noreferrer" target="_blank">
<span aria-hidden="true" class="rodape-rede-icone">
<svg viewbox="0 0 24 24">
<rect height="18" rx="5" width="18" x="3" y="3"></rect>
<circle cx="12" cy="12" r="4.2"></circle>
<circle cx="17.5" cy="6.7" r="1"></circle>
</svg>
</span>
<span>
<strong>Instagram</strong>
<small>@ctg_sentineladaserra</small>
</span>
</a>
<!-- EDITAR AQUI: link/botão "Facebook CTG Sentinela da Serra" | href="https://www.facebook.com/share/1Co5ZCNmHT/?mibextid=wwXIfr" --><a aria-label="Facebook do CTG Sentinela da Serra" class="rodape-rede" href="https://www.facebook.com/share/1Co5ZCNmHT/?mibextid=wwXIfr" rel="noopener noreferrer" target="_blank">
<span aria-hidden="true" class="rodape-rede-icone">
<svg viewbox="0 0 24 24">
<path d="M14.2 8.2V6.7c0-.7.5-.9 1-.9h2.4V2.2L14.3 2c-3.3 0-5.3 2-5.3 5.5v.7H6v4h3V22h4.3v-9.8h3.4l.6-4h-4.1Z"></path>
</svg>
</span>
<span>
<strong>Facebook</strong>
<small>CTG Sentinela da Serra</small>
</span>
</a>
</div>
</div>
</div>
<div class="rodape-social-base">
<span class="rodape-criador"><span class="rodape-criador-label">Site criado por <strong>Mateus Selleri</strong></span><a aria-label="Instagram do criador" href="https://www.instagram.com/SEU_USUARIO" rel="noopener noreferrer" target="_blank"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5Zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7Zm5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5Zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5Zm5.5-3.25a1.25 1.25 0 1 1-1.25 1.25 1.25 0 0 1-1.25 1.25Z"/></svg></a><a aria-label="LinkedIn do criador" href="https://www.linkedin.com/in/SEU_USUARIO" rel="noopener noreferrer" target="_blank"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5.2 3.5A2.2 2.2 0 1 1 5.2 7.9a2.2 2.2 0 0 1 0-4.4ZM3.3 9h3.8v11.7H3.3V9Zm6.1 0h3.6v1.6h.05c.5-.95 1.72-1.95 3.55-1.95 3.8 0 4.5 2.5 4.5 5.75v6.3h-3.8v-5.58c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.13 1.45-2.13 2.94v5.68H9.4V9Z"/></svg></a></span>
</div>
</div>
  </footer>

  <div class="busca-overlay" aria-hidden="true">
    <div class="busca-caixa" role="dialog" aria-modal="true" aria-labelledby="titulo-busca">
      <div class="busca-topo">
        <h2 id="titulo-busca">O que procuras?</h2>
        <button class="icone-botao busca-fechar" type="button" aria-label="Fechar pesquisa">×</button>
      </div>
      <input class="busca-campo" type="search" aria-label="Termo de pesquisa" placeholder="Ex.: guia, prova, estudo...">
      <div class="busca-resultados"></div>
    </div>
  </div>
</body>
</html>
