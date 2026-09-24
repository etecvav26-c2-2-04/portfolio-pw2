<?php
session_start();
require_once('../auth.php');
exigirAdmin(); 

require_once('../DataBase/Connection.php');

if (isset($_GET['id'])) {
    try {
        $stmt = $pdo->prepare("DELETE FROM Clientes WHERE id_cliente = :id");
        $stmt->execute([':id' => $_GET['id']]);
    } catch (PDOException $e) {
        die("Erro ao excluir usuário: " . $e->getMessage());
    }
}

header('Location: ../Usuarios.php?msg=excluido');
exit;
