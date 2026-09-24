<?php
session_start();
require_once('auth.php');
exigirAdmin(); // só admin

require_once('DataBase/Connection.php');

$id_produto = $_GET['id'] ?? null;
$produto = null;
$tamanhosSelecionados = [];

$categorias = $pdo->query("SELECT * FROM Categorias ORDER BY nome_categoria")->fetchAll();

if ($id_produto) {
    $stmt = $pdo->prepare("SELECT * FROM Produtos WHERE id_produto = :id");
    $stmt->execute([':id' => $id_produto]);
    $produto = $stmt->fetch();

    if (!$produto) {
        die('Produto não encontrado.');
    }

    $stmtT = $pdo->prepare("SELECT tamanho, quantidade_estoque FROM Produtos_Tamanhos WHERE id_produto = :id");
    $stmtT->execute([':id' => $id_produto]);
    foreach ($stmtT->fetchAll() as $row) {
        $tamanhosSelecionados[$row['tamanho']] = $row['quantidade_estoque'];
    }
}

$tamanhosDisponiveis = ['PP', 'P', 'M', 'G', 'GG', 'U'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $produto ? 'Editar Produto' : 'Novo Produto' ?></title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'partials/navbar.php'; ?>

    <div class="container">
        <h2 class="mb-4"><?= $produto ? 'Editar Produto' : 'Novo Produto' ?></h2>

        <form class="row g-3" action="CRUD/produto_salvar.php" method="post">

            <?php if ($produto): ?>
                <input type="hidden" name="id_produto" value="<?= $produto['id_produto'] ?>">
            <?php endif; ?>

            <div class="col-md-6">
                <label for="inputNome" class="form-label">Nome do produto</label>
                <input name="nome" type="text" class="form-control" id="inputNome"
                       value="<?= htmlspecialchars($produto['nome'] ?? '') ?>" required>
            </div>

            <div class="col-md-3">
                <label for="inputCor" class="form-label">Cor</label>
                <input name="cor" type="text" class="form-control" id="inputCor"
                       value="<?= htmlspecialchars($produto['cor'] ?? '') ?>">
            </div>

            <div class="col-md-3">
                <label for="inputPreco" class="form-label">Preço (R$)</label>
                <input name="preco" type="number" step="0.01" min="0" class="form-control" id="inputPreco"
                       value="<?= htmlspecialchars($produto['preco'] ?? '') ?>" required>
            </div>

            <div class="col-md-6">
                <label for="inputCategoria" class="form-label">Categoria</label>
                <select name="id_categoria" id="inputCategoria" class="form-select" required>
                    <option value="" selected disabled hidden>Escolha...</option>
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?= $categoria['id_categoria'] ?>"
                            <?= (isset($produto['id_categoria']) && $produto['id_categoria'] == $categoria['id_categoria']) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($categoria['nome_categoria']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-12">
                <label for="inputDescricao" class="form-label">Descrição</label>
                <textarea name="descricao" class="form-control" id="inputDescricao" rows="3"><?= htmlspecialchars($produto['descricao'] ?? '') ?></textarea>
            </div>

            <div class="col-12">
                <label class="form-label">Tamanhos disponíveis e quantidade em estoque</label>
                <div class="row">
                    <?php foreach ($tamanhosDisponiveis as $tam): ?>
                        <?php
                            $marcado = isset($tamanhosSelecionados[$tam]);
                            $quantidade = $tamanhosSelecionados[$tam] ?? 0;
                        ?>
                        <div class="col-md-2 col-4 border rounded p-2 m-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tamanhos[]"
                                       value="<?= $tam ?>" id="tam<?= $tam ?>" <?= $marcado ? 'checked' : '' ?>>
                                <label class="form-check-label" for="tam<?= $tam ?>"><?= $tam ?></label>
                            </div>
                            <input type="number" min="0" class="form-control form-control-sm mt-1"
                                   name="quantidade[<?= $tam ?>]" value="<?= (int)$quantidade ?>" placeholder="Qtd. estoque">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="form-text">Marque os tamanhos que o produto possui e informe a quantidade em estoque de cada um.</div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar Produto</button>
                <a href="Produtos.php" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>
</body>
</html>
