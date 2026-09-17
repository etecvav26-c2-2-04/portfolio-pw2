<?php
session_start();
require_once('DataBase/Connection.php');

$sessao_id = session_id();

$stmt = $pdo->prepare("
    SELECT ci.id_carrinho_item, ci.quantidade, p.id_produto, p.nome, p.preco, pt.tamanho, pt.quantidade_estoque
    FROM Carrinho ci
    JOIN Produtos p ON ci.id_produto = p.id_produto
    JOIN Produtos_Tamanhos pt ON ci.id_tamanho = pt.id_tamanho
    WHERE ci.sessao_id = :sessao
    ORDER BY ci.id_carrinho_item DESC
");
$stmt->execute([':sessao' => $sessao_id]);
$itens = $stmt->fetchAll();

$total = 0;
foreach ($itens as $item) {
    $total += $item['preco'] * $item['quantidade'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'partials/navbar.php'; ?>

    <div class="container">
        <h2 class="mb-4">Meu Carrinho</h2>

        <?php if (isset($_GET['msg'])): ?>
            <div class="alert alert-success">
                <?php
                    $mensagens = [
                        'adicionado' => 'Produto adicionado ao carrinho!',
                        'atualizado' => 'Quantidade atualizada!',
                        'removido' => 'Item removido do carrinho.',
                    ];
                    echo $mensagens[$_GET['msg']] ?? '';
                ?>
            </div>
        <?php endif; ?>

        <?php if (empty($itens)): ?>
            <p>Seu carrinho está vazio. <a href="Loja.php">Ver produtos</a></p>
        <?php else: ?>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Tamanho</th>
                        <th>Preço unit.</th>
                        <th>Quantidade</th>
                        <th>Subtotal</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($itens as $item): ?>
                        <tr>
                            <td><?= htmlspecialchars($item['nome']) ?></td>
                            <td><?= htmlspecialchars($item['tamanho']) ?></td>
                            <td>R$ <?= number_format($item['preco'], 2, ',', '.') ?></td>
                            <td>
                                <form action="CRUD/carrinho_atualizar.php" method="post" class="d-flex gap-2">
                                    <input type="hidden" name="id_carrinho_item" value="<?= $item['id_carrinho_item'] ?>">
                                    <input type="number" name="quantidade" min="1" max="<?= (int)$item['quantidade_estoque'] + (int)$item['quantidade'] ?>"
                                           value="<?= $item['quantidade'] ?>" class="form-control form-control-sm" style="width: 80px;">
                                    <button type="submit" class="btn btn-sm btn-outline-primary">Atualizar</button>
                                </form>
                            </td>
                            <td>R$ <?= number_format($item['preco'] * $item['quantidade'], 2, ',', '.') ?></td>
                            <td>
                                <a href="CRUD/carrinho_remover.php?id=<?= $item['id_carrinho_item'] ?>"
                                   class="btn btn-sm btn-outline-danger"
                                   onclick="return confirm('Remover este item do carrinho?');">Remover</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">Total</th>
                        <th colspan="2">R$ <?= number_format($total, 2, ',', '.') ?></th>
                    </tr>
                </tfoot>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
