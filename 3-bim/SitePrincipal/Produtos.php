<?php
session_start();
require_once('auth.php');
exigirAdmin(); // só admin

require_once('DataBase/Connection.php');

$produtos = $pdo->query("
    SELECT p.*, c.nome_categoria
    FROM Produtos p
    LEFT JOIN Categorias c ON p.id_categoria = c.id_categoria
    ORDER BY p.id_produto DESC
")->fetchAll();

$stmtTamanhos = $pdo->prepare("SELECT tamanho, quantidade_estoque FROM Produtos_Tamanhos WHERE id_produto = :id ORDER BY tamanho");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Produtos</title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'partials/navbar.php'; ?>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Gerenciar Produtos</h2>
            <a href="ProdutoForm.php" class="btn btn-primary">+ Novo Produto</a>
        </div>

        <?php if (isset($_GET['msg'])): ?>
            <div class="alert alert-success">
                <?php
                    $mensagens = [
                        'sucesso' => 'Produto salvo com sucesso!',
                        'excluido' => 'Produto excluído com sucesso!',
                    ];
                    echo $mensagens[$_GET['msg']] ?? '';
                ?>
            </div>
        <?php endif; ?>

        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Cor</th>
                    <th>Preço</th>
                    <th>Tamanhos / Estoque</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($produtos)): ?>
                    <tr><td colspan="6" class="text-center">Nenhum produto cadastrado ainda.</td></tr>
                <?php endif; ?>

                <?php foreach ($produtos as $produto): ?>
                    <?php
                        $stmtTamanhos->execute([':id' => $produto['id_produto']]);
                        $tamanhos = $stmtTamanhos->fetchAll();
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($produto['nome']) ?></td>
                        <td><?= htmlspecialchars($produto['nome_categoria'] ?? '—') ?></td>
                        <td><?= htmlspecialchars($produto['cor'] ?? '—') ?></td>
                        <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
                        <td>
                            <?php if (empty($tamanhos)): ?>
                                <span class="text-muted">Sem tamanhos cadastrados</span>
                            <?php else: ?>
                                <?php foreach ($tamanhos as $t): ?>
                                    <span class="badge bg-secondary">
                                        <?= htmlspecialchars($t['tamanho']) ?>: <?= (int)$t['quantidade_estoque'] ?>
                                    </span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="ProdutoForm.php?id=<?= $produto['id_produto'] ?>" class="btn btn-sm btn-outline-primary">Editar</a>
                            <a href="CRUD/produto_deletar.php?id=<?= $produto['id_produto'] ?>"
                               class="btn btn-sm btn-outline-danger"
                               onclick="return confirm('Tem certeza que deseja excluir este produto?');">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
