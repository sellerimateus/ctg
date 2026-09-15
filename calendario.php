<!DOCTYPE html>

<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2a1c12">
  <meta name="description" content="Calendário de eventos do CTG Sentinela da Serra.">
  <title>Calendário | CTG Sentinela da Serra</title>
  <link rel="stylesheet" href="assets/css/global.css?v=1">
  <script defer src="assets/js/visual.js?v=2"></script></head>
<body class="pagina-calendario"><!--=========================================================
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
$paginaAtual = 'calendario';
$tipoMenu = 'principal';
require __DIR__ . '/includes/header.php';
?>
<!-- CONTEÚDO PRINCIPAL DA PÁGINA --><main id="conteudo">
<!-- SEÇÃO .page-hero --><section class="page-hero">
<div class="container page-hero-grid">
<div>
<!-- EDITAR AQUI: título "Todos os compromissos em um só lugar." --><h1>Todos os compromissos em um só lugar.</h1>
<!-- EDITAR AQUI: texto "Navegue pelos meses para visualizar ensaios, reuniões, simulados ..." --><p></p>
</div>
</div>
</section>
<!-- SEÇÃO .secao --><section class="secao">
<div class="container calendario-shell">
<div class="calendario-box">
<div class="calendario-topo">
<div>
<small>Agenda mensal</small>
<!-- EDITAR AQUI: título "Calendário" --><h2 data-calendario-titulo="">Calendário</h2>
</div>
<div class="calendario-navegacao">
<!-- EDITAR AQUI: botão "←" --><button aria-label="Mês anterior" data-mes-anterior="" type="button">←</button>
<!-- EDITAR AQUI: botão "Hoje" --><button aria-label="Voltar ao mês atual" data-mes-hoje="" type="button">Hoje</button>
<!-- EDITAR AQUI: botão "→" --><button aria-label="Próximo mês" data-mes-proximo="" type="button">→</button>
</div>
</div>
<div class="calendario-grade"></div>
</div>
<aside class="agenda-lateral">
<!-- EDITAR AQUI: título "Eventos do mês" --><h2>Eventos do mês</h2>
<div class="agenda-lateral-lista"></div>
<!-- EDITAR AQUI: texto "As datas são demonstrativas. Edite o bloco eventosBase em assets/..." --><p style="margin-top:18px;color:var(--tinta-suave);font-size:.86rem">
</aside>
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
<!-- EDITAR AQUI: campo input name="" --><input aria-label="Termo de pesquisa" class="busca-campo" placeholder="Ex.: calendário, provas, história..." type="search"/>
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
    if (href === atual || (["prova-campeira.php","prova-artistica.php","prova-escrita.php"].includes(atual) && href === "escolha-modalidade.php")) {
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
    const filtradas = paginasBusca.filter(item =>
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
</script></body>
</html>
