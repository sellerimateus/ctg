document.addEventListener("DOMContentLoaded", () => {
  const menuButton = document.querySelector(".menu-toggle");
  const menu = document.querySelector(".menu-principal");
  const closeButton = document.querySelector(".menu-mobile-fechar");

  const closeMenu = () => {
    if (!menuButton || !menu) return;
    menuButton.setAttribute("aria-expanded", "false");
    menu.classList.remove("aberto");
    document.body.classList.remove("menu-aberto");
  };

  if (menuButton && menu) {
    menuButton.addEventListener("click", () => {
      const open = menuButton.getAttribute("aria-expanded") === "true";
      menuButton.setAttribute("aria-expanded", String(!open));
      menu.classList.toggle("aberto", !open);
      document.body.classList.toggle("menu-aberto", !open);
    });
  }
  closeButton?.addEventListener("click", closeMenu);
  menu?.querySelectorAll("a").forEach((link) => link.addEventListener("click", closeMenu));

  document.querySelectorAll("[data-escolha]").forEach((link) => {
    link.addEventListener("click", () => {
      sessionStorage.setItem("modalidadeCTG", link.dataset.escolha);
    });
  });

  const buscaOverlay = document.querySelector(".busca-overlay");
  const buscaAbrir = document.querySelector(".busca-abrir");
  const buscaFechar = document.querySelector(".busca-fechar");
  const buscaCampo = document.querySelector(".busca-campo");
  const buscaResultados = document.querySelector(".busca-resultados");
  const paginasBusca = [
    { titulo: "Início", url: "index.html", palavras: "portal CTG Sentinela da Serra" },
    { titulo: "Guia do Concorrente", url: "escolha-modalidade.html", palavras: "peão prenda modalidade guia de estudos" },
    { titulo: "História do CTG", url: "historia.html", palavras: "história fundação entidade galpão" },
    { titulo: "Calendário", url: "calendario.html", palavras: "calendário eventos compromissos ensaios" },
    { titulo: "Prova Campeira", url: "prova-campeira.html", palavras: "trança encilha charque churrasco chimarrão" },
    { titulo: "Prova Artística", url: "prova-artistica.html", palavras: "poesia declamação dança roteiro" },
    { titulo: "Prova Escrita", url: "prova-escrita.html", palavras: "questões livros simulados estudo" }
  ];

  const renderizarBusca = (termo = "") => {
    if (!buscaResultados) return;

    const consulta = termo.trim().toLowerCase();
    const resultados = paginasBusca.filter((pagina) =>
      !consulta || `${pagina.titulo} ${pagina.palavras}`.toLowerCase().includes(consulta)
    );

    buscaResultados.replaceChildren();

    if (!resultados.length) {
      const aviso = document.createElement("p");
      aviso.textContent = "Nenhum conteúdo encontrado.";
      buscaResultados.append(aviso);
      return;
    }

    resultados.forEach((pagina) => {
      const link = document.createElement("a");
      const titulo = document.createElement("strong");
      const descricao = document.createElement("small");

      link.href = pagina.url;
      titulo.textContent = pagina.titulo;
      descricao.textContent = pagina.palavras;
      link.append(titulo, document.createElement("br"), descricao);
      buscaResultados.append(link);
    });
  };

  const fecharBusca = () => {
    buscaOverlay?.classList.remove("aberta");
    buscaOverlay?.setAttribute("aria-hidden", "true");
  };

  buscaAbrir?.addEventListener("click", () => {
    buscaOverlay?.classList.add("aberta");
    buscaOverlay?.setAttribute("aria-hidden", "false");
    renderizarBusca(buscaCampo?.value || "");
    buscaCampo?.focus();
  });
  buscaFechar?.addEventListener("click", fecharBusca);
  buscaCampo?.addEventListener("input", () => renderizarBusca(buscaCampo.value));
  buscaOverlay?.addEventListener("click", (event) => {
    if (event.target === buscaOverlay) fecharBusca();
  });
  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") fecharBusca();
  });
});
