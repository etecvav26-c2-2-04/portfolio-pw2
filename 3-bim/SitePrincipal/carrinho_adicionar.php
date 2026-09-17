<?php
session_start();
require_once('../DataBase/Connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sessao_id  = session_id();
    $id_produto = $_POST['id_produto'];
    $id_tamanho = $_POST['id_tamanho'];
    $quantidade = max(1, (int)$_POST['quantidade']);

    try {
        // Se esse produto/tamanho já está no carrinho dessa sessão,
        // apenas soma a quantidade em vez de criar uma linha duplicada.
        $stmt = $pdo->prepare(
            "SELECT id_carrinho_item, quantidade FROM Carrinho
             WHERE sessao_id = :sessao AND id_produto = :produto AND id_tamanho = :tamanho"
        );
        $stmt->execute([
            ':sessao' => $sessao_id,
            ':produto' => $id_produto,
            ':tamanho' => $id_tamanho,
        ]);
        $existente = $stmt->fetch();

        if ($existente) {
            $novaQuantidade = $existente['quantidade'] + $quantidade;
            $up = $pdo->prepare("UPDATE Carrinho SET quantidade = :q WHERE id_carrinho_item = :id");
            $up->execute([':q' => $novaQuantidade, ':id' => $existente['id_carrinho_item']]);
        } else {
            $ins = $pdo->prepare(
                "INSERT INTO Carrinho (sessao_id, id_produto, id_tamanho, quantidade)
                 VALUES (:sessao, :produto, :tamanho, :quantidade)"
            );
            $ins->execute([
                ':sessao' => $sessao_id,
                ':produto' => $id_produto,
                ':tamanho' => $id_tamanho,
                ':quantidade' => $quantidade,
            ]);
        }

        header('Location: ../Carrinho.php?msg=adicionado');
        exit;
    } catch (PDOException $e) {
        echo "Erro ao adicionar ao carrinho: " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido.";
}
