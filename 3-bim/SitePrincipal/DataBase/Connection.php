<?php

    $host     = 'localhost';
    $db       = 'EntreLinhas'; 
    $user     = 'root';       
    $password = '';            
    $charset  = 'utf8mb4';     


    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Mostra erros detalhados de SQL
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,     // Retorna dados como array associativo ($linha['nome'])
        PDO::ATTR_EMULATE_PREPARES   => false,                // Usa prepared statements reais contra SQL Injection
    ];


    try {
        $pdo = new PDO($dsn, $user, $password, $options);

    } catch (\PDOException $e) {

        die("Erro ao conectar com o banco de dados: " . $e->getMessage());
    }
?>
