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
            <div class="card-header">O que é o Sodium?</div>

            <div class="card-body">

                <p class="card-text">
                    <strong> Sodium</strong> funciona como um <strong>cofre inteligente pré-configurado</strong>: ela combina algoritmos matemáticos modernos para <strong>trancar dados</strong> com chaves secretas, </strong>embaralhar senhas</strong> de forma irreversível e </strong>assinar mensagens</strong> para provar sua autoria, sem deixar margem para erros do programador.
            </div>
        </div>
    
        <form method="post" action="">
            <div class="row g-3 align-items-center">

                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Senha indecifrável:</label>
                </div>

                <div class="col-auto">
                    <input type="password" id="inputPassword6" name="SenhaSodium" class="form-control" required>
                </div>

                <div class="col-auto">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    <?php include 'includes/footer.php'?>
</body>
</html>
