<?php
session_start();
require_once('auth.php');
exigirAdmin(); // Só admin passa daqui. Quem não está logado -> login.php. Quem está logado mas não é admin -> Index.php.

require_once('DataBase/Connection.php');

$totalProdutos = (int) $pdo->query("SELECT COUNT(*) FROM Produtos")->fetchColumn();
$totalUsuarios = (int) $pdo->query("SELECT COUNT(*) FROM Clientes")->fetchColumn();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'partials/navbar.php'; ?>

    <div class="container">
        <h2 class="mb-4">Painel Administrativo</h2>
        <p class="text-muted">Bem-vindo(a), <?= htmlspecialchars($_SESSION['usuario_nome']) ?>.</p>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Produtos</h5>
                        <p class="card-text display-6"><?= $totalProdutos ?></p>
                        <p class="card-text">produto(s) cadastrado(s) na loja.</p>
                        <a href="Produtos.php" class="btn btn-primary">Gerenciar Produtos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Usuários</h5>
                        <p class="card-text display-6"><?= $totalUsuarios ?></p>
                        <p class="card-text">usuário(s) cadastrado(s) no site.</p>
                        <a href="Usuarios.php" class="btn btn-primary">Gerenciar Usuários</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
