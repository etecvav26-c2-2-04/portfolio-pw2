<?php
require_once("config/conexao.php");

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    if (!empty($nome) && !empty($fabricante) && !empty($preco) && !empty($estoque)) {
        $sql = "INSERT INTO produtos (nome, fabricante, preco, estoque) VALUES (:nome, :fabricante, :preco, :estoque)";
        $stmt = $pdo->prepare($sql);
        
        $sucesso = $stmt->execute([
            ':nome' => $nome,
            ':fabricante' => $fabricante,
            ':preco' => $preco,
            ':estoque' => $estoque
        ]);

        if ($sucesso) {
            header("Location: index.php");
            exit();
        } else {
            $mensagem = "Erro ao cadastrar o produto.";
        }
    } else {
        $mensagem = "Por favor, preencha todos os campos.";
    }
}

require_once("includes/header.php");
?>

<h1>Cadastrar Produto</h1>

<?php if (!empty($mensagem)): ?>
    <p style="color: red; font-weight: bold;"><?= $mensagem ?></p>
<?php endif; ?>

<form action="cadastro.php" method="POST" style="display: flex; flex-direction: column; gap: 15px; max-width: 400px;">
    <div>
        <label>Nome do Produto:</label><br>
        <input type="text" name="nome" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
    </div>
    <div>
        <label>Fabricante:</label><br>
        <input type="text" name="fabricante" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
    </div>
    <div>
        <label>Preço (R$):</label><br>
        <input type="number" step="0.01" name="preco" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
    </div>
    <div>
        <label>Quantidade em Estoque:</label><br>
        <input type="number" name="estoque" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
    </div>
    <div>
        <button type="submit" class="btn-cadastrar" style="border: none; cursor: pointer; width: 100%;">Salvar Produto</button>
        <a href="index.php" style="display: block; text-align: center; margin-top: 10px; color: #777; text-decoration: none;">Voltar</a>
    </div>
</form>

<?php
require_once("includes/footer.php");
?>
