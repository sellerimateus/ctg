// Carrega os ajustes visuais compartilhados sem sobrescrever o layout
// específico de cada página.
(() => {
  document.addEventListener('DOMContentLoaded', () => {
    const pilha = document.querySelector('[data-carrossel-vertical]');
    if (!pilha || pilha.dataset.imagensExtras === 'true') return;
    const quantidadeInicial = pilha.querySelectorAll('.foto-vertical').length;
    [
      ['img/historia/comunidade.jpg', 'Comunidade e pertencimento'],
      ['img/historia/invernadas.jpg', 'Arte, dança e tradição']
    ].forEach(([src, legenda], indice) => {
      const figura = document.createElement('figure');
      const imagem = document.createElement('img');
      const descricao = document.createElement('figcaption');
      figura.className = 'foto-vertical';
      figura.dataset.fotoVertical = String(quantidadeInicial + indice);
      imagem.src = src;
      imagem.alt = legenda;
      imagem.loading = 'lazy';
      descricao.textContent = legenda;
      figura.append(imagem, descricao);
      pilha.appendChild(figura);
    });
    pilha.dataset.imagensExtras = 'true';
  });
})();
