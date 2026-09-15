# Banco de dados

As migrações ficam fora de `auth/` para separar dados da lógica de acesso.

1. Crie o banco `ctg` com `utf8mb4`.
2. Execute `001_autenticacao.sql` uma única vez.
3. Crie um usuário MySQL exclusivo da aplicação, com acesso apenas a
   `usuarios` e `login_tentativas`.
4. Salve as credenciais fora de `htdocs`, no arquivo definido por
   `CTG_CONFIG_FILE` (por padrão: `C:\xampp\private\ctg-db.php`).
