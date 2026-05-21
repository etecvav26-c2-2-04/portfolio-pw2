CREATE TABLE Produtos
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(100) NOT NULL,
    Fabricante VARCHAR(100) NOT NULL,
    Preco DECIMAL (10,2) NOT NULL,
    Estoque INT NOT NULL
)
/*Query do sql para a criação da tabela no servidor*/
