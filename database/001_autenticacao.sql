-- Migração MySQL da área restrita do CTG.
-- Execute uma vez no banco `ctg` antes da publicação.

CREATE TABLE IF NOT EXISTS usuarios (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(80) NOT NULL,
  senha_hash VARCHAR(255) NOT NULL,
  criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_usuarios_usuario (usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS login_tentativas (
  chave CHAR(64) NOT NULL,
  tentativas TINYINT UNSIGNED NOT NULL DEFAULT 0,
  inicio_janela DATETIME NOT NULL,
  bloqueado_ate DATETIME NULL,
  PRIMARY KEY (chave),
  KEY idx_login_tentativas_bloqueado (bloqueado_ate)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exemplo: gere o hash com password_hash no PHP; nunca guarde senha em texto.
-- INSERT INTO usuarios (usuario, senha_hash) VALUES ('novo_usuario', '$2y$...');
