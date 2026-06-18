<?php
require_once("config/conexao.php");

$produto = null;

// Busca o produto pelo ID para preencher o formulário
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
    // Processa a atualização
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

<h1>Editar Produto</h1>

<form action="editar.php" method="POST" style="display: flex; flex-direction: column; gap: 15px; max-width: 400px;">
    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
    
    <div>
        <label>Nome do Produto:</label><br>
        <input type="text" name="nome" value="<?= htmlspecialchars($produto['nome']) ?>" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
    </div>
    <div>
        <label>Fabricante:</label><br>
        <input type="text" name="fabricante" value="<?= htmlspecialchars($produto['fabricante']) ?>" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
    </div>
    <div>
        <label>Preço (R$):</label><br>
        <input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?>" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
    </div>
    <div>
        <label>Quantidade em Estoque:</label><br>
        <input type="number" name="estoque" value="<?= $produto['estoque'] ?>" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
    </div>
    <div>
        <button type="submit" class="btn-cadastrar" style="border: none; cursor: pointer; width: 100%; background-color: #0d47a1;">Atualizar Produto</button>
        <a href="index.php" style="display: block; text-align: center; margin-top: 10px; color: #777; text-decoration: none;">Cancelar</a>
    </div>
</form>

<?php
require_once("includes/footer.php");
?>