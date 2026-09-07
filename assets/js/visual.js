// Carrega os ajustes visuais compartilhados sem sobrescrever o layout
// específico de cada página.
(() => {
  const ajustesMobile = document.createElement('link');
  ajustesMobile.rel = 'stylesheet';
  ajustesMobile.href = 'assets/css/shared/mobile.css?v=1';

  const estilo = document.createElement('link');
  estilo.rel = 'stylesheet';
  estilo.href = 'assets/css/shared/visual.css?v=27';

  document.head.append(ajustesMobile, estilo);
  document.addEventListener('DOMContentLoaded', () => {
    const pilha = document.querySelector('[data-carrossel-vertical]');
    if (!pilha || pilha.dataset.imagensExtras === 'true') return;
    const quantidadeInicial = pilha.querySelectorAll('.foto-vertical').length;
    [
      ['img/historia/comunidade.jpg', 'Comunidade e pertencimento'],
      ['img/historia/invernadas.jpg', 'Arte, dança e tradição']
    ].forEach(([src, legenda], indice) => {
      const figura = document.createElement('figure');
      figura.className = 'foto-vertical';
      figura.dataset.fotoVertical = String(quantidadeInicial + indice);
      figura.innerHTML = `<img src="${src}" alt="${legenda}" loading="lazy"><figcaption>${legenda}</figcaption>`;
      pilha.appendChild(figura);
    });
    pilha.dataset.imagensExtras = 'true';
  });
})();
