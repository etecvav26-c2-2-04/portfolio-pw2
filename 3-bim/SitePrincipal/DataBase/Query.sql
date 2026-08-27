CREATE IF NOT EXISTS EntreLinhas;

CREATE IF NOT EXISTS TABLE Clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    SenhaHash VARCHAR(255) NOT NULL
);

CREATE IF NOT EXISTS TABLE Categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome_categoria VARCHAR(50) NOT NULL,
    descricao TEXT
);

CREATE IF NOT EXISTS TABLE Produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    tamanho VARCHAR(5),  
    cor VARCHAR(30),
    preco DECIMAL(10, 2) NOT NULL,
    quantidade_estoque INT NOT NULL,
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES Categorias(id_categoria)
);

CREATE IF NOT EXISTS TABLE Pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    data_compra DATETIME DEFAULT CURRENT_TIMESTAMP,
    valor_total DECIMAL(10, 2),
    status_pedido VARCHAR(20) DEFAULT 'Pendente',
    FOREIGN KEY (id_cliente) REFERENCES Clientes(id_cliente)
);
