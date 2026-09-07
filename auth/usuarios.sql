-- Banco MySQL: ctg
-- Usuários da área restrita. As senhas devem sempre ser gravadas com password_hash do PHP.

CREATE TABLE IF NOT EXISTS usuarios (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(80) NOT NULL,
  senha_hash VARCHAR(255) NOT NULL,
  criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_usuarios_usuario (usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exemplo de inserção: substitua o hash pelo resultado de password_hash('sua-senha', PASSWORD_DEFAULT).
-- INSERT INTO usuarios (usuario, senha_hash) VALUES ('novo_usuario', '$2y$...');
