<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <a class="navbar-brand" href="Pesquisa.php">Criptografias</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">OpenSSL</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Sodium</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Hash</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Crypt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-sm">
        <form method="post" name="SenhaHash">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">senha indecifravel</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </span>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php 

?>
    </div>
</body>
</html>
