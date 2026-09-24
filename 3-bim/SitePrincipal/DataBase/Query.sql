CREATE DATABASE IF NOT EXISTS EntreLinhas;

USE EntreLinhas;

CREATE TABLE IF NOT EXISTS Clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    SenhaHash VARCHAR(255) NOT NULL,
    is_admin TINYINT(1) NOT NULL DEFAULT 0,
    celular VARCHAR(15),
    endereco VARCHAR(255),
    estado VARCHAR(2),
    cidade VARCHAR(100),
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome_categoria VARCHAR(50) NOT NULL,
    descricao TEXT,
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE IF NOT EXISTS Produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    cor VARCHAR(30),
    preco DECIMAL(10, 2) NOT NULL,
    id_categoria INT,
    data_adicionado DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_categoria) REFERENCES Categorias(id_categoria)
);


CREATE TABLE IF NOT EXISTS Produtos_Tamanhos (
    id_tamanho INT AUTO_INCREMENT PRIMARY KEY,
    id_produto INT NOT NULL,
    tamanho VARCHAR(5) NOT NULL,
    quantidade_estoque INT NOT NULL DEFAULT 0,
    UNIQUE KEY uq_produto_tamanho (id_produto, tamanho),
    FOREIGN KEY (id_produto) REFERENCES Produtos(id_produto) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS Pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    data_compra DATETIME DEFAULT CURRENT_TIMESTAMP,
    valor_total DECIMAL(10, 2),
    status_pedido VARCHAR(20) DEFAULT 'Pendente',
    endereco_entrega VARCHAR(255),
    FOREIGN KEY (id_cliente) REFERENCES Clientes(id_cliente)
);

CREATE TABLE IF NOT EXISTS ItensPedido (
    id_item INT AUTO_INCREMENT PRIMARY KEY,
    id_pedido INT,
    id_produto INT,
    quantidade INT NOT NULL,
    preco_unitario DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_pedido) REFERENCES Pedidos(id_pedido),
    FOREIGN KEY (id_produto) REFERENCES Produtos(id_produto)
);


CREATE TABLE IF NOT EXISTS Carrinho (
    id_carrinho_item INT AUTO_INCREMENT PRIMARY KEY,
    sessao_id VARCHAR(100) NOT NULL,
    id_produto INT NOT NULL,
    id_tamanho INT NOT NULL,
    quantidade INT NOT NULL DEFAULT 1,
    data_adicionado DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_produto) REFERENCES Produtos(id_produto) ON DELETE CASCADE,
    FOREIGN KEY (id_tamanho) REFERENCES Produtos_Tamanhos(id_tamanho) ON DELETE CASCADE
);


INSERT INTO Categorias (nome_categoria, descricao) VALUES
    ('Camisetas', 'Camisetas em geral'),
    ('Calças', 'Calças, jeans e leggings'),
    ('Vestidos', 'Vestidos casuais e de festa'),
    ('Blusas', 'Blusas e regatas'),
    ('Acessórios', 'Bolsas, cintos e afins');

-- Se o banco EntreLinhas já existia ANTES desta atualização (ou seja, a
-- tabela Clientes já foi criada sem a coluna is_admin), rode a linha abaixo
-- uma única vez para adicionar a coluna que faltou:
-- ALTER TABLE Clientes ADD COLUMN IF NOT EXISTS is_admin TINYINT(1) NOT NULL DEFAULT 0;

-- Como criar o primeiro usuário administrador:
-- 1) Cadastre-se normalmente pelo site (FormCadastro.php).
-- 2) Rode o comando abaixo trocando o email pelo que você cadastrou:
-- UPDATE Clientes SET is_admin = 1 WHERE email = 'seuemail@exemplo.com';
