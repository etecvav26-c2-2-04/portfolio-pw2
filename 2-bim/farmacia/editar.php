<?php
require_once("config/conexao.php");

$produto = null;

if (isset($_GET['id'])) {
        $id = $_GET['id'];
            $sql = "SELECT * FROM produtos WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                    $stmt->execute([':id' => $id]);
                        $produto = $stmt->fetch(PDO::FETCH_ASSOC);

                            if (!$produto) {
                                        die("Produto não encontrado.");
                            }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $id = $_POST['id'];
                $nome = $_POST['nome'];
                    $fabricante = $_POST['fabricante'];
                        $preco = $_POST['preco'];
                            $estoque = $_POST['estoque'];

                                $sql = "UPDATE produtos SET nome = :nome, fabricante = :fabricante, preco = :preco, estoque = :estoque WHERE id = :id";
                                    $stmt = $pdo->prepare($sql);
                                        $stmt->execute([
                                                    ':nome' => $nome,
                                                    ':fabricante' => $fabricante,
                                                    ':preco' => $preco,
                                                    ':estoque' => $estoque,
                                                    ':id' => $id
                                        ]);

                                            header("Location: index.php");
                                            exit();
} else {
        header("Location: index.php");
            exit();
}

require_once("includes/header.php");
?>