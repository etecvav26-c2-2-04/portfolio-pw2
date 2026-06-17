<?php 
$dsn = "mysql:host=localhost;dbname=mysql;charset=utf8";
$usuario = "root";
$senha = "";

//dsn significa Data Source Name (Nome da Fonte de Dados).

try {
    $pdo = new PDO($dsn, $usuario, $senha);
} catch (PDOException $e) 
{ 
    die("Erro ao conectar: " . $e->getMessage());
}
?>
