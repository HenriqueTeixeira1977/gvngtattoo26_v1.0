-- Cria o banco de dados
CREATE DATABASE IF NOT EXISTS gvng_tattoo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE gvng_tattoo;

-- Tabela de leads (contatos do formulário)
CREATE TABLE leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    whatsapp VARCHAR(30) NOT NULL,
    email VARCHAR(100),
    mensagem TEXT NOT NULL,
    data_envio DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('novo', 'contatado', 'agendado', 'concluído') DEFAULT 'novo',
    INDEX idx_data (data_envio),
    INDEX idx_status (status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de usuários admin (para o futuro painel)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Usuário admin inicial (senha: admin123 - MUDE EM PRODUÇÃO!)
-- Gere o hash com o PHP abaixo ou use: password_hash('sua_senha_forte', PASSWORD_DEFAULT)
INSERT INTO users (username, password) VALUES 
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'); -- hash de "password"