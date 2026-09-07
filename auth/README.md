# Área restrita — próxima etapa

Esta pasta contém a base do banco para substituir a lista de e-mails no navegador.

## Fluxo planejado

1. Um Worker recebe o e-mail na página de acesso.
2. O Worker consulta `alunos` no D1, exigindo `ativo = 1`.
3. Um código temporário é enviado ao e-mail do aluno.
4. Após a confirmação, o Worker cria uma sessão em cookie `HttpOnly`, `Secure` e `SameSite=Lax`.
5. O Worker permite `guia-concorrente.html`, `guia-prenda.html` e as provas somente com sessão válida.

## Preparação do D1

No painel Cloudflare, crie um banco D1 e execute `schema.sql`. Depois cadastre os alunos autorizados sem colocar e-mails reais no JavaScript público.

## Importante

Enquanto o site continuar sendo publicado apenas como arquivos estáticos, o conteúdo das páginas ainda poderá ser acessado diretamente por quem descobrir a URL. A proteção real começa quando as páginas restritas passam pelo Worker e a sessão é validada no servidor.
