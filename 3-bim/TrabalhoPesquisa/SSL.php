<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container mt-4">

        <div class="card text-bg-ligth mb-4">

            <div class="card-header">O que é o OpenSSl?</div>

            <div class="card-body">

                <p class="card-text">
                 O <strong>OpenSSl</strong> funciona como o motor de segurança da internet: implementa os protocolos TLS/SSL para 
                 <strong>criar conexões seguras (HTTPS)</strong> entre seu navegador e sites, trancando os dados durante o envio, gerando certificados de autenticidade e gerenciando chaves de segurança.
                </p>
            </div>
        </div>

        <form method="post" action="">
            <div class="row g-3 align-items-center">

                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Senha indecifrável:</label>
                </div>

                <div class="col-auto">
                    <input type="password" id="inputPassword6" name="SenhaHash" class="form-control" required>
                </div>

                <div class="col-auto">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>
        </form>

        <div class="col-12 mt-3">
            <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['SenhaHash'])) {
                    $senha = $_POST['SenhaHash'];
                    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
                    echo "<strong>Senha criptografada com OpenSSL:</strong><br>",($senhaHash);
                }
            ?>
        </div>
    </div>
    
    <?php include 'includes/footer.php'?>
</body>
</html>
