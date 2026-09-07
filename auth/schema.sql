-- Banco de alunos autorizados para a área restrita do CTG.
CREATE TABLE IF NOT EXISTS alunos (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  nome TEXT NOT NULL,
  email TEXT NOT NULL UNIQUE,
  ativo INTEGER NOT NULL DEFAULT 1 CHECK (ativo IN (0, 1)),
  criado_em TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX IF NOT EXISTS idx_alunos_email_ativo
  ON alunos (email, ativo);

-- Exemplo: troque pelos alunos reais antes de publicar.
-- INSERT INTO alunos (nome, email) VALUES ('Nome do aluno', 'aluno@exemplo.com');
