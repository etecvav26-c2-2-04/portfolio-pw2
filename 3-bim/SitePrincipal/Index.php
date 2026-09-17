<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EntreLinhas</title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'partials/navbar.php'; ?>

    <div class="container text-center">
        <?php if (isset($_GET['msg']) && $_GET['msg'] === 'cadastro_sucesso'): ?>
            <div class="alert alert-success">Cadastro realizado com sucesso! Seja bem-vindo(a).</div>
        <?php endif; ?>

        <h1>Bem-vindo(a) à EntreLinhas</h1>
        <p class="lead">Moda para todos os estilos.</p>
        <a class="btn btn-primary btn-lg m-2" href="Loja.php" role="button">Ver Produtos</a>
    </div>
</body>
</html>
