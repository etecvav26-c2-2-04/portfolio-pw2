<?php
session_start();
require_once('auth.php');
require_once('DataBase/Connection.php');

$produtos = $pdo->query("
    SELECT p.*, c.nome_categoria
    FROM Produtos p
    LEFT JOIN Categorias c ON p.id_categoria = c.id_categoria
    ORDER BY p.id_produto DESC
")->fetchAll();

$stmtTamanhos = $pdo->prepare(
    "SELECT id_tamanho, tamanho, quantidade_estoque
     FROM Produtos_Tamanhos
     WHERE id_produto = :id AND quantidade_estoque > 0
     ORDER BY tamanho"
);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'partials/navbar.php'; ?>

    <div class="container">
        <h2 class="mb-4">Nossos Produtos</h2>

        <div class="row">
            <?php if (empty($produtos)): ?>
                <p>Nenhum produto disponível no momento. Volte em breve!</p>
            <?php endif; ?>

            <?php foreach ($produtos as $produto): ?>
                <?php
                    $stmtTamanhos->execute([':id' => $produto['id_produto']]);
                    $tamanhos = $stmtTamanhos->fetchAll();
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($produto['nome']) ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($produto['nome_categoria'] ?? '') ?></h6>
                            <p class="card-text"><?= nl2br(htmlspecialchars($produto['descricao'] ?? '')) ?></p>
                            <p class="fw-bold">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>

                            <?php if (empty($tamanhos)): ?>
                                <p class="text-danger">Fora de estoque</p>
                            <?php else: ?>
                                <form action="CRUD/carrinho_adicionar.php" method="post" class="row g-2">
                                    <input type="hidden" name="id_produto" value="<?= $produto['id_produto'] ?>">

                                    <div class="col-6">
                                        <label class="form-label">Tamanho</label>
                                        <select name="id_tamanho" class="form-select form-select-sm" required>
                                            <?php foreach ($tamanhos as $t): ?>
                                                <option value="<?= $t['id_tamanho'] ?>">
                                                    <?= htmlspecialchars($t['tamanho']) ?> (<?= $t['quantidade_estoque'] ?> disp.)
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label">Qtd.</label>
                                        <input type="number" name="quantidade" min="1" value="1" class="form-control form-control-sm" required>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-sm w-100">Adicionar ao carrinho</button>
                                    </div>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
