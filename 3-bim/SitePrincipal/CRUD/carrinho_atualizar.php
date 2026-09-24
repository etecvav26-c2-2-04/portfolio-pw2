<?php
session_start();
require_once('../auth.php');
exigirLogin(); // Sem login, volta pra login.php

require_once('../DataBase/Connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Mesma chave usada em Carrinho.php: o id do usuário logado.
    $sessao_id      = 'user_' . $_SESSION['usuario_id'];
    $id_carrinho    = $_POST['id_carrinho_item'];
    $quantidade     = max(1, (int)$_POST['quantidade']);

    try {
        // O "AND sessao_id = :sessao" garante que ninguém consiga alterar
        // o carrinho de outra sessão trocando o id manualmente na URL.
        $stmt = $pdo->prepare(
            "UPDATE Carrinho SET quantidade = :q
             WHERE id_carrinho_item = :id AND sessao_id = :sessao"
        );
        $stmt->execute([
            ':q' => $quantidade,
            ':id' => $id_carrinho,
            ':sessao' => $sessao_id,
        ]);

        header('Location: ../Carrinho.php?msg=atualizado');
        exit;
    } catch (PDOException $e) {
        echo "Erro ao atualizar carrinho: " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido.";
}
