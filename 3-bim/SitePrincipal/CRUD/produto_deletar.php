<?php
session_start();
require_once('../auth.php');
exigirAdmin(); // Só admin gerencia produtos

require_once('../DataBase/Connection.php');

if (isset($_GET['id'])) {
    try {
        $stmt = $pdo->prepare("DELETE FROM Produtos WHERE id_produto = :id");
        $stmt->execute([':id' => $_GET['id']]);
    } catch (PDOException $e) {
        die("Erro ao excluir produto: " . $e->getMessage());
    }
}

header('Location: ../Produtos.php?msg=excluido');
exit;
