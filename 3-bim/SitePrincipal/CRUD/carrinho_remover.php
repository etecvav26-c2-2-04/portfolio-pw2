<?php
session_start();
require_once('../DataBase/Connection.php');

if (isset($_GET['id'])) {
    try {
        $sessao_id = session_id();
        $stmt = $pdo->prepare(
            "DELETE FROM Carrinho WHERE id_carrinho_item = :id AND sessao_id = :sessao"
        );
        $stmt->execute([':id' => $_GET['id'], ':sessao' => $sessao_id]);
    } catch (PDOException $e) {
        die("Erro ao remover item do carrinho: " . $e->getMessage());
    }
}

header('Location: ../Carrinho.php?msg=removido');
exit;
