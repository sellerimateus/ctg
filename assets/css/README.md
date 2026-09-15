# Organização dos estilos

Todos os estilos do site estão reunidos em `global.css`.

O arquivo está dividido e comentado nesta ordem:

1. identidade visual, componentes e estrutura compartilhada;
2. página inicial;
3. história;
4. calendário;
5. base dos guias do concorrente;
6. escolha da modalidade;
7. provas campeira, artística e escrita;
8. tela de acesso.

Cada página possui uma classe identificadora no elemento `<body>`. Os blocos
específicos de `global.css` são isolados por essas classes para impedir que o
estilo de uma tela interfira em outra.

Todas as páginas devem carregar somente:

```html
<link rel="stylesheet" href="assets/css/global.css">
```

Evite CSS diretamente nas páginas. Assim, a identidade visual permanece
centralizada, documentada e mais simples de manter.
