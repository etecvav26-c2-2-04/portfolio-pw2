<?php
    $senhaHash = '';
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['SenhaHash'])) 
    {
        $senhaHash = password_hash($_POST['SenhaHash'], PASSWORD_DEFAULT);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CriptografiaHash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container mt-4">
        <div class="card text-bg-ligth mb-4">
            <div class="card-header">O que é o Hash?</div>

            <div class="card-body">

                <p class="card-text">
                    O <strong>Hash</strong> é um processo unidirecional (de mão única) que transforma qualquer texto em uma sequência fixa de caracteres. 
                    Diferente da criptografia comum, o hash <strong>não pode ser revertido</strong> para o texto original, sendo ideal para salvar senhas de forma segura no banco de dados.
                </p>
            </div>
        </div>

        <form method="post" action="">
            <div class="row g-3 align-items-center mb-4">

                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Digite a sua senha indecifrável:</label>
                </div>

                <div class="col-auto">
                    <input type="password" id="inputPassword6" name="SenhaHash" class="form-control" required>
                </div>

                <div class="col-auto">
                    <button class="btn btn-dark" type="submit">Enviar</button>
                </div>
            </div>
        </form>

        <div class="card border-success shadow-sm mb-4">
            <div class="card-header bg-dark text-white fw-bold">
                <i class="bi bi-check-circle-fill me-2"></i>Resultado da Criptografia
            </div>
            <div class="card-body">
                <p class="mb-1 text-muted small fw-bold">Texto Criptografado (Hash):</p>
                <div class="p-3 bg-light border rounded text-break font-monospace small">
                    <?= htmlspecialchars($senhaHash) ?>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'?>
</body>
</html>

