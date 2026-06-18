<?php
require_once("config/conexao.php");

$sql = "SELECT * FROM produtos ORDER BY nome ASC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once("includes/header.php");
?>

<h1> FarmAura - Estoque</h1>
<a href="cadastro.php" class="btn-cadastrar">+ Cadastrar Novo Produto</a>

<table class="tabela-produtos">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Fabricante</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($produtos): ?>
            <?php foreach ($produtos as $p): ?>
            <tr>
                <td data-label="ID"><?= $p['id'] ?></td>
                <td data-label="Nome"><strong><?= htmlspecialchars($p['nome']) ?></strong></td>
                <td data-label="Fabricante"><?= htmlspecialchars($p['fabricante']) ?></td>
                <td data-label="Preço" class="preco">R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                <td data-label="Estoque"><?= $p['estoque'] ?> un.</td>
                <td data-label="Ações">
                    <a href="editar.php?id=<?= $p['id'] ?>" class="btn-acao btn-editar">Editar</a>
                    <a href="excluir.php?id=<?= $p['id'] ?>" class="btn-acao btn-excluir" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" style="text-align: center;">Nenhum produto cadastrado no estoque.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
require_once("includes/footer.php");
?>
