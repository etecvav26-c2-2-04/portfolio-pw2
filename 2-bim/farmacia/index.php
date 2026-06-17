<?php

require_once("config/conexao.php");
require_once("includes/header.php");
require_once("includes/footer.php");

$sql = "SELECT * FROM produtos";
$stmt = $pdo->prepare($sql);
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<h1>Farmácia VAV - Estoque</h1>
<a href="cadastro.php">-> Cadastrar Novo Produto</a>
<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Fabricante</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($produtos as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['nome'] ?></td>
        <td><?= $p['fabricante'] ?></td>
        <td>R$ <?= $p['preco'] ?></td>
        <td><?= $p['estoque'] ?></td>
        <td>
            <a href="editar.php?id=<?= $p['id'] ?>">Editar</a> | 
            <a href="excluir.php?id=<?= $p['id'] ?>" onclick="return confirm('Excluir?')">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
