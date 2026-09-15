<!DOCTYPE html>

<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2a1c12">
  <meta name="description" content="Conteúdos para a prova artística.">
  <title>Prova Artística | CTG Sentinela da Serra</title>
  <link rel="stylesheet" href="assets/css/global.css?v=1">
  <script defer src="assets/js/visual.js?v=2"></script></head>
<body class="pagina-prova-artistica"><!--=========================================================
GUIA DE EDIÇÃO DESTA PÁGINA

Os comentários "EDITAR AQUI" indicam os pontos mais comuns
para alterar textos, links, botões e imagens.

HTML:
- h1 / h2 / h3 = títulos
- p = textos
- a href="..." = links e botões
- img src="..." = caminho da imagem
- section = blocos grandes da página

CSS:
- fica dentro das tags <style> no <head>
- no fim do CSS há comentários indicando os ajustes principais

JAVASCRIPT:
- fica dentro das tags <script> no fim da página
=========================================================-->
<!-- EDITAR AQUI: link/botão "Ir para o conteúdo" | href="#conteudo" --><a class="skip-link" href="#conteudo">Ir para o conteúdo</a>
<div aria-hidden="true" class="topo-faixa"></div>
<!-- CABEÇALHO / MENU PRINCIPAL --><?php
$paginaAtual = 'prova-artistica';
$tipoMenu = 'guia';
require __DIR__ . '/includes/header.php';
?>
<!-- CONTEÚDO PRINCIPAL DA PÁGINA --><main id="conteudo">
<!-- SEÇÃO .artistica-hero --><section class="artistica-hero">
<div class="container">
<!-- EDITAR AQUI: título "Prova Artística" --><h1>Prova Artística</h1>
<!-- EDITAR AQUI: texto "Um espaço para organizar poesias, danças e a estrutura da apresen..." --><p>
        Um espaço para organizar poesias, danças e a estrutura da apresentação
        antes de entrar em cena.
      </p>
</div>
</section>
<!-- SEÇÃO #estrutura-apresentacao --><section class="artistica-secao artistica-estrutura" id="estrutura-apresentacao">
<div class="container">
<div class="artistica-duas-colunas artistica-estrutura-grid">
<div class="artistica-texto">
<h2>Estrutura da Apresentação Artística</h2>
<p class="artistica-destaque">Siga esta sequência para organizar os ensaios, a postura e cada transição.</p>
</div>
<div class="artistica-passos">
<article><span>01</span><div><h3>Momento da Entrada</h3><p>Entre, cumprimente e apresente-se com nome, entidade e Região Tradicionalista.</p></div></article>
<article><span>02</span><div><h3>Momento da Prova Oral</h3><p>Responda ao tema sorteado com clareza, conhecimento e segurança.</p></div></article>
<article><span>03</span><div><h3>Momento Artístico</h3><p>Apresente declamação, canto ou instrumento musical com expressão e domínio.</p></div></article>
<article><span>04</span><div><h3>Momento da Dança Tradicional</h3><p>Apresente a dança escolhida com ritmo, postura e domínio dos passos.</p></div></article>
<article><span>05</span><div><h3>Momento da Dança de Salão</h3><p>Valorize ritmo, condução e entrosamento do par.</p></div></article>
<article><span>06</span><div><h3>Momento da Saída</h3><p>Faça a saudação final e saia com postura.</p></div></article>
</div>
<div class="artistica-fluxo">
<h3>Sequência da apresentação</h3>
<ol class="artistica-fluxo-lista">
<li><strong>Entrada e apresentação</strong><small>Saudação e identificação do candidato.</small></li>
<li><strong>Prova oral sorteada</strong><small>Clareza, conhecimento e segurança.</small></li>
<li><strong>Momento artístico</strong><small>Declamação, canto ou instrumento.</small></li>
<li><strong>Dança tradicional</strong><small>Uma dança escolhida pelo candidato.</small></li>
<li><strong>Dança de salão</strong><small>Uma dança escolhida pelo candidato.</small></li>
<li><strong>Saída</strong><small>Saudação final e encerramento.</small></li>
</ol>
</div>
</div>
</div>
</section>
<!-- SEÇÃO #poesias --><section class="artistica-secao artistica-poesias" id="poesias">
<div class="container artistica-duas-colunas">
<div class="artistica-texto">
<!-- EDITAR AQUI: título "Encontre o texto certo para a apresentação." --><h2>Encontre o texto certo para a apresentação.</h2>
<!-- EDITAR AQUI: texto "Use o acervo de poesias como ponto de partida para escolher texto..." --><p class="artistica-destaque">
          Use o acervo de poesias como ponto de partida para escolher textos,
          estudar interpretação e preparar uma declamação coerente com a categoria.
        </p>
<!-- TROQUE O # ABAIXO PELO LINK DO SITE DE POESIAS -->
<!-- EDITAR AQUI: link/botão "Acessar acervo de poesias →" | href="https://www.juntandorimas.com.br/poesias1.htm" --><a class="artistica-botao artistica-botao-destaque" href="https://www.juntandorimas.com.br/poesias1.htm" id="link-site-poesias" rel="noopener noreferrer" target="_blank">
          Acessar acervo de poesias →
        </a>
</div>
<aside class="artistica-quadro">
<span class="artistica-quadro-numero">01</span>
<!-- EDITAR AQUI: título "Antes de escolher" --><h3>Antes de escolher</h3>
<!-- EDITAR AQUI: itens desta lista ficam dentro das tags <li> --><ul>
<li>Observe tema, linguagem e duração.</li>
<li>Escolha um texto adequado à idade e à categoria.</li>
<li>Treine dicção, pausas, ritmo e interpretação.</li>
<li>Confirme sempre as exigências do regulamento.</li>
</ul>
</aside>
</div>
</section>
<!-- SEÇÃO #dancas --><section class="artistica-secao artistica-dancas" id="dancas">
<div class="container">
<!-- CABEÇALHO / MENU PRINCIPAL --><header class="artistica-cabecalho">
<span class="artistica-marca">Danças tradicionais</span>
<!-- EDITAR AQUI: título "Lista para organizar os estudos e ensaios." --><h2>Lista para organizar os estudos e ensaios.</h2>
<!-- EDITAR AQUI: texto "Esta área funciona como um índice rápido. A lista pode ser ajusta..." --><p>
          Esta área funciona como um índice rápido. A lista pode ser ajustada
          depois conforme as danças exigidas no regulamento da competição.
        </p>
</header>
<div class="artistica-grade-dancas">
<article class="artistica-danca">
<span>01</span>
<!-- EDITAR AQUI: título "Chimarrita" --><h3>Chimarrita</h3>
<!-- EDITAR AQUI: texto "Reserve aqui anotações sobre formação, passos, marcação e detalhe..." --><p>Reserve aqui anotações sobre formação, passos, marcação e detalhes da execução.</p>
</article>
<article class="artistica-danca">
<span>02</span>
<!-- EDITAR AQUI: título "Pezinho" --><h3>Pezinho</h3>
<!-- EDITAR AQUI: texto "Use este espaço para registrar sequência, postura, ritmo e pontos..." --><p>Use este espaço para registrar sequência, postura, ritmo e pontos de atenção.</p>
</article>
<article class="artistica-danca">
<span>03</span>
<!-- EDITAR AQUI: título "Maçanico" --><h3>Maçanico</h3>
<!-- EDITAR AQUI: texto "Anote entradas, deslocamentos, figuras e correções feitas durante..." --><p>Anote entradas, deslocamentos, figuras e correções feitas durante os ensaios.</p>
</article>
<article class="artistica-danca">
<span>04</span>
<!-- EDITAR AQUI: título "Tatu" --><h3>Tatu</h3>
<!-- EDITAR AQUI: texto "Organize observações técnicas e detalhes que precisam ser repetid..." --><p>Organize observações técnicas e detalhes que precisam ser repetidos no treino.</p>
</article>
<article class="artistica-danca">
<span>05</span>
<!-- EDITAR AQUI: título "Balaio" --><h3>Balaio</h3>
<!-- EDITAR AQUI: texto "Registre pontos importantes da coreografia, ritmo e coordenação d..." --><p>Registre pontos importantes da coreografia, ritmo e coordenação do conjunto.</p>
</article>
<article class="artistica-danca">
<span>06</span>
<!-- EDITAR AQUI: título "Cana-Verde" --><h3>Cana-Verde</h3>
<!-- EDITAR AQUI: texto "Separe aqui observações sobre condução, formação, musicalidade e ..." --><p>Separe aqui observações sobre condução, formação, musicalidade e acabamento.</p>
</article>
<article class="artistica-danca">
<span>07</span>
<!-- EDITAR AQUI: título "Rancheira de Carreirinha" --><h3>Rancheira de Carreirinha</h3>
<!-- EDITAR AQUI: texto "Use o cartão para reunir sequência, movimentação e cuidados duran..." --><p>Use o cartão para reunir sequência, movimentação e cuidados durante a execução.</p>
</article>
<article class="artistica-danca">
<span>08</span>
<!-- EDITAR AQUI: título "Chote de Duas Damas" --><h3>Chote de Duas Damas</h3>
<!-- EDITAR AQUI: texto "Anote estrutura, posicionamento, condução e pontos que merecem re..." --><p>Anote estrutura, posicionamento, condução e pontos que merecem revisão.</p>
</article>
</div>
<div class="artistica-aviso">
<strong>Importante:</strong>
        a relação definitiva de danças deve seguir o regulamento e a categoria
        em que o concorrente estiver inscrito.
      </div>
</div>
</section>
</main>
<!-- RODAPÉ DA PÁGINA --><footer class="site-footer rodape-social">
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
<div aria-hidden="true" class="busca-overlay">
<div aria-labelledby="titulo-busca" aria-modal="true" class="busca-caixa" role="dialog">
<div class="busca-topo">
<!-- EDITAR AQUI: título "O que procuras?" --><h2 id="titulo-busca">O que procuras?</h2>
<!-- EDITAR AQUI: botão "×" --><button aria-label="Fechar pesquisa" class="icone-botao busca-fechar" type="button">×</button>
</div>
<!-- EDITAR AQUI: campo input name="" --><input aria-label="Termo de pesquisa" class="busca-campo" placeholder="Ex.: guia, prova, estudo..." type="search"/>
<div class="busca-resultados"></div>
</div>
</div>
<script data-origem="js/global.js">// =========================================================
// JAVASCRIPT BLOCO 1
// ALTERE AQUI somente se quiser mudar comportamento/interação.
// =========================================================

/* =========================================================
   JavaScript incorporado de: js/global.js
   ========================================================= */
const paginasBusca = [
  { titulo: "Página inicial", url: "index.php", palavras: "início tradição ctg galpão campeiro" },
  { titulo: "Modalidades", url: "escolha-modalidade.php", palavras: "estudos livros materiais provas questões concurso escrita campeira artística regulamento" },
  { titulo: "Prova Campeira", url: "prova-campeira.php", palavras: "campeira segurança equipamentos animais técnica" },
  { titulo: "Prova Artística", url: "prova-artistica.php", palavras: "artística dança declamação apresentação ensaio indumentária" },
  { titulo: "Prova Escrita", url: "prova-escrita.php", palavras: "escrita questões simulado revisão leitura estudo" },
  { titulo: "Calendário", url: "calendario.php", palavras: "eventos ensaios reuniões simulados datas" },
  { titulo: "História da Entidade", url: "historia.php", palavras: "fundação história ctg memória patronagem" }
];
const paginasBuscaEstudo = paginasBusca.filter((pagina) => !["index.php", "historia.php", "calendario.php"].includes(pagina.url));
paginasBuscaEstudo[0] = { ...paginasBuscaEstudo[0], titulo: "Guia do Concorrente" };
paginasBuscaEstudo.splice(1, 0,
  { titulo: "Guia do Pe\u00e3o", url: "guia-concorrente.php", palavras: "estudo peao prova campeira" },
  { titulo: "Guia da Prenda", url: "guia-prenda.php", palavras: "estudo prenda prova artistica escrita" }
);

document.addEventListener("DOMContentLoaded", () => {
  configurarMenu();
  marcarPaginaAtual();
  configurarBusca();
  preencherAno();
  atualizarResumoHome();
  configurarQuiz();
  atualizarProgressoLivros();
  configurarCalendario();
});

function configurarMenu() {
  const botao = document.querySelector(".menu-toggle");
  const menu = document.querySelector(".menu-principal");
  if (!botao || !menu) return;

  botao.addEventListener("click", () => {
    const aberto = botao.getAttribute("aria-expanded") === "true";
    botao.setAttribute("aria-expanded", String(!aberto));
    menu.classList.toggle("aberto", !aberto);
    document.body.classList.toggle("menu-aberto", !aberto);
  });

  menu.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      botao.setAttribute("aria-expanded", "false");
      menu.classList.remove("aberto");
      document.body.classList.remove("menu-aberto");
    });
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      botao.setAttribute("aria-expanded", "false");
      menu.classList.remove("aberto");
      document.body.classList.remove("menu-aberto");
    }
  });
}

function marcarPaginaAtual() {
  const atual = location.pathname.split("/").pop() || "index.php";
  document.querySelectorAll(".menu-lista a").forEach(link => {
    const href = link.getAttribute("href");
    if (href === atual) {
      link.classList.add("ativo");
      link.setAttribute("aria-current", "page");
    }
  });
}

function configurarBusca() {
  const overlay = document.querySelector(".busca-overlay");
  const abrir = document.querySelectorAll(".busca-abrir");
  const fechar = document.querySelector(".busca-fechar");
  const campo = document.querySelector(".busca-campo");
  const resultados = document.querySelector(".busca-resultados");
  if (!overlay || !campo || !resultados) return;

  const renderizar = (termo = "") => {
    const busca = termo.trim().toLowerCase();
    const filtradas = paginasBuscaEstudo.filter(item =>
      !busca ||
      item.titulo.toLowerCase().includes(busca) ||
      item.palavras.includes(busca)
    );

    resultados.innerHTML = filtradas.length
      ? filtradas.map(item => `<a href="${item.url}"><strong>${item.titulo}</strong><br><small>${item.palavras}</small></a>`).join("")
      : "<p>Nenhum conteúdo encontrado.</p>";
  };

  const abrirBusca = () => {
    overlay.classList.add("aberta");
    overlay.setAttribute("aria-hidden", "false");
    renderizar("");
    setTimeout(() => campo.focus(), 60);
  };

  const fecharBusca = () => {
    overlay.classList.remove("aberta");
    overlay.setAttribute("aria-hidden", "true");
  };

  abrir.forEach(botao => botao.addEventListener("click", abrirBusca));
  fechar?.addEventListener("click", fecharBusca);
  overlay.addEventListener("click", event => {
    if (event.target === overlay) fecharBusca();
  });
  campo.addEventListener("input", () => renderizar(campo.value));
  document.addEventListener("keydown", event => {
    if (event.key === "Escape") fecharBusca();
  });
}

function preencherAno() {
  document.querySelectorAll("[data-ano]").forEach(el => {
    el.textContent = new Date().getFullYear();
  });
}


function atualizarProgressoLivros() {
  document.querySelectorAll("[data-progresso-livro]").forEach(barra => {
    const livro = barra.dataset.progressoLivro;
    const valor = Number(localStorage.getItem(`progresso-${livro}`) || 0);
    barra.style.setProperty("--progresso", `${valor}%`);
    const texto = document.querySelector(`[data-progresso-texto="${livro}"]`);
    if (texto) texto.textContent = `${valor}% concluído`;
  });
}

function atualizarResumoHome() {
  const agora = new Date();
  const dia = document.querySelector("[data-proximo-dia]");
  const mes = document.querySelector("[data-proximo-mes]");
  if (!dia || !mes) return;

  const proximo = new Date(agora.getFullYear(), agora.getMonth(), agora.getDate() + 5);
  dia.textContent = String(proximo.getDate()).padStart(2, "0");
  mes.textContent = proximo.toLocaleDateString("pt-BR", { month: "long" });
}

function configurarQuiz() {
  const form = document.querySelector("[data-quiz]");
  const retorno = document.querySelector(".quiz-retorno");
  if (!form || !retorno) return;

  form.addEventListener("submit", event => {
    event.preventDefault();
    const resposta = new FormData(form).get("resposta");
    if (!resposta) {
      retorno.textContent = "Selecione uma alternativa.";
      retorno.style.color = "#9e2f2f";
      return;
    }

    if (resposta === "correta") {
      retorno.textContent = "Correto. O respeito é a base da convivência e da tradição.";
      retorno.style.color = "#1f5b3a";
      localStorage.setItem("quizConcluido", "1");
    } else {
      retorno.textContent = "Ainda não. Revise o conteúdo e tente novamente.";
      retorno.style.color = "#9e2f2f";
    }
  });
}

const eventosBase = [
  { deslocamento: 3, titulo: "Ensaio da invernada", tipo: "verde", horario: "19h30" },
  { deslocamento: 8, titulo: "Reunião de patrões", tipo: "vermelho", horario: "20h" },
  { deslocamento: 14, titulo: "Simulado do concurso", tipo: "amarelo", horario: "14h" },
  { deslocamento: 20, titulo: "Jantar campeiro", tipo: "verde", horario: "20h30" },
  { deslocamento: 27, titulo: "Roda de chimarrão", tipo: "vermelho", horario: "16h" }
];

function criarEventosDoMes(ano, mes) {
  const ultimoDia = new Date(ano, mes + 1, 0).getDate();
  return eventosBase.map((evento, indice) => ({
    ...evento,
    dia: Math.min(ultimoDia, 2 + evento.deslocamento + (indice % 2))
  }));
}

function configurarCalendario() {
  const grade = document.querySelector(".calendario-grade");
  const titulo = document.querySelector("[data-calendario-titulo]");
  const agenda = document.querySelector(".agenda-lateral-lista");
  const anterior = document.querySelector("[data-mes-anterior]");
  const proximo = document.querySelector("[data-mes-proximo]");
  const hojeBotao = document.querySelector("[data-mes-hoje]");
  if (!grade || !titulo) return;

  const hoje = new Date();
  let referencia = new Date(hoje.getFullYear(), hoje.getMonth(), 1);

  const renderizar = () => {
    const ano = referencia.getFullYear();
    const mes = referencia.getMonth();
    const eventos = criarEventosDoMes(ano, mes);
    titulo.textContent = referencia.toLocaleDateString("pt-BR", { month: "long", year: "numeric" });

    const nomesSemana = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"];
    const inicio = new Date(ano, mes, 1).getDay();
    const ultimo = new Date(ano, mes + 1, 0).getDate();
    const anteriorUltimo = new Date(ano, mes, 0).getDate();

    grade.innerHTML = nomesSemana.map(nome => `<div class="calendario-semana">${nome}</div>`).join("");

    for (let i = inicio - 1; i >= 0; i--) {
      grade.insertAdjacentHTML("beforeend", `<div class="calendario-dia fora"><span class="dia-numero">${anteriorUltimo - i}</span></div>`);
    }

    for (let dia = 1; dia <= ultimo; dia++) {
      const eventosDia = eventos.filter(evento => evento.dia === dia);
      const ehHoje = hoje.getFullYear() === ano && hoje.getMonth() === mes && hoje.getDate() === dia;
      grade.insertAdjacentHTML("beforeend", `
        <div class="calendario-dia ${ehHoje ? "hoje" : ""}">
          <span class="dia-numero">${dia}</span>
          ${eventosDia.map(evento => `<span class="evento-ponto ${evento.tipo}">${evento.titulo}</span>`).join("")}
        </div>
      `);
    }

    const total = inicio + ultimo;
    const faltantes = (7 - (total % 7)) % 7;
    for (let dia = 1; dia <= faltantes; dia++) {
      grade.insertAdjacentHTML("beforeend", `<div class="calendario-dia fora"><span class="dia-numero">${dia}</span></div>`);
    }

    if (agenda) {
      agenda.innerHTML = eventos.map(evento => `
        <article class="agenda-mini ${evento.tipo}">
          <b>${String(evento.dia).padStart(2, "0")} — ${evento.titulo}</b>
          <small>${evento.horario} • Sede do CTG</small>
        </article>
      `).join("");
    }
  };

  anterior?.addEventListener("click", () => {
    referencia = new Date(referencia.getFullYear(), referencia.getMonth() - 1, 1);
    renderizar();
  });

  proximo?.addEventListener("click", () => {
    referencia = new Date(referencia.getFullYear(), referencia.getMonth() + 1, 1);
    renderizar();
  });

  hojeBotao?.addEventListener("click", () => {
    referencia = new Date(hoje.getFullYear(), hoje.getMonth(), 1);
    renderizar();
  });

  renderizar();
}


</script><script>
/* =========================================================
   MENU MOBILE — FECHAR PELO X OU PELO FUNDO ESCURO
   ========================================================= */
document.addEventListener("DOMContentLoaded", () => {
  const menu = document.querySelector(".menu-principal");
  const botaoMenu = document.querySelector(".menu-toggle");
  const botaoFechar = document.querySelector(".menu-mobile-fechar");

  const fecharMenuMobile = () => {
    if (!menu || !botaoMenu) return;
    botaoMenu.setAttribute("aria-expanded", "false");
    menu.classList.remove("aberto");
    document.body.classList.remove("menu-aberto");
  };

  if (botaoFechar) {
    botaoFechar.addEventListener("click", fecharMenuMobile);
  }

  if (menu) {
    menu.addEventListener("click", (event) => {
      if (event.target === menu) fecharMenuMobile();
    });
  }
});
</script><script>
/* =========================================================
   CORREÇÃO MENU — NÃO TRAVAR ROLAGEM NO NOTEBOOK
   ========================================================= */
window.addEventListener("resize", () => {
  if (window.innerWidth > 1080) {
    const menu = document.querySelector(".menu-principal");
    const botao = document.querySelector(".menu-toggle");

    document.body.classList.remove("menu-aberto");

    if (menu) {
      menu.classList.remove("aberto");
    }

    if (botao) {
      botao.setAttribute("aria-expanded", "false");
    }
  }
});
</script><button class="botao-voltar-pagina" type="button" onclick="history.length > 1 ? history.back() : location.href='index.php'">Voltar</button></body>
</html>
