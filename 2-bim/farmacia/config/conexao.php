<?php

$dsn = "mysql:host=localhost;dbname=farmacia;charset=utf8";
$usuario = "root";
$senha = "";

try {
    $pdo = new PDO($dsn, $usuario, $senha);
    echo ("Conexão realizada");
} catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
    
}
?>
