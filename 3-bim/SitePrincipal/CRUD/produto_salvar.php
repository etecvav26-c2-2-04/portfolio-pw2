<?php
session_start();
require_once('../auth.php');
exigirAdmin(); 

require_once('../DataBase/Connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id_produto   = $_POST['id_produto'] ?? null;
    $nome         = $_POST['nome'];
    $descricao    = $_POST['descricao'] ?? '';
    $cor          = $_POST['cor'] ?? '';
    $preco        = $_POST['preco'];
    $id_categoria = $_POST['id_categoria'];
    $tamanhos     = $_POST['tamanhos'] ?? [];      
    $quantidades  = $_POST['quantidade'] ?? [];    

    try {
        $pdo->beginTransaction();

        if (!empty($id_produto)) {
            
            $sql = "UPDATE Produtos
                    SET nome = :nome, descricao = :descricao, cor = :cor,
                        preco = :preco, id_categoria = :id_categoria
                    WHERE id_produto = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nome' => $nome,
                ':descricao' => $descricao,
                ':cor' => $cor,
                ':preco' => $preco,
                ':id_categoria' => $id_categoria,
                ':id' => $id_produto,
            ]);
        } else {
            
            $sql = "INSERT INTO Produtos (nome, descricao, cor, preco, id_categoria)
                    VALUES (:nome, :descricao, :cor, :preco, :id_categoria)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nome' => $nome,
                ':descricao' => $descricao,
                ':cor' => $cor,
                ':preco' => $preco,
                ':id_categoria' => $id_categoria,
            ]);
            $id_produto = $pdo->lastInsertId();
        }

        $del = $pdo->prepare("DELETE FROM Produtos_Tamanhos WHERE id_produto = :id");
        $del->execute([':id' => $id_produto]);

        $insTamanho = $pdo->prepare(
            "INSERT INTO Produtos_Tamanhos (id_produto, tamanho, quantidade_estoque)
             VALUES (:id_produto, :tamanho, :quantidade)"
        );

        foreach ($tamanhos as $tamanho) {
            $quantidade = isset($quantidades[$tamanho]) ? (int)$quantidades[$tamanho] : 0;
            $insTamanho->execute([
                ':id_produto' => $id_produto,
                ':tamanho' => $tamanho,
                ':quantidade' => $quantidade,
            ]);
        }

        $pdo->commit();
        header('Location: ../Produtos.php?msg=sucesso');
        exit;
    } catch (PDOException $e) {
        $pdo->rollBack();
        echo "Erro ao salvar produto: " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido.";
}
