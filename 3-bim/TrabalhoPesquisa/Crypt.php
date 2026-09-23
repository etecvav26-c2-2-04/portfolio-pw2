<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['senha'])) {
        $resultado = crypt($_POST['senha'], '_S4..some') ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa PHP</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php include 'includes/header.php'; ?>

     <div class="container my-4">

        <div class="card bg-body-tertiary border-0 shadow-sm mb-4">

            <div class="card-header bg-transparent border-0 pt-3 pb-0">
                <h5 class="card-title fw-bold text-dark mb-0">
                    <i class="bi bi-shield-lock-fill text-primary"></i>O que é a função Crypt?
                </h5>
            </div>

            <div class="card-body">
                <p class="card-text text-secondary mb-0">
                O <strong>crypt</strong> é uma função clássica dos sistemas Unix/Linux criada para 
                <strong>proteger senhas</strong>. Ele transforma a senha digitada em um código seguro (<strong>hash</strong>) 
                usando um tempero aleatório (<strong>salt</strong>), 
                permitindo que o sistema valide o login sem precisar guardar a senha original em texto limpo.</p> 
            </div>

        </div>
        
        <div class="card-body p-4">
            <form action="" method="POST">
                
                <div class="mb-4">
                    <label for="chave" class="form-label fw-semibold">
                        <i class="bi bi-key me-1"></i>Senha secreta:
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-shield-shaded"></i></span>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua senha" required>
                    </div>
                    <div class="form-text">A grande maioria dos sites utiliza criptografias unidirecionais, por isso ele não te informa sua senha quando você redefine-a</div>
                </div>

                
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" name="acao" value="criptografar" class="btn btn-dark fw-bold">
                        <i class="bi bi-shield-lock-fill me-1"></i> Criptografar
                    </button>
                </div>

            </form>
        </div>
        <?php if (!empty($resultado)): ?> <!--tratamento de erro, PHP é insuportável -->
                <div class="card border-success shadow-sm mb-4">
                    <div class="card-header bg-success text-white fw-bold">
                        <i class="bi bi-check-circle-fill me-2"></i>Resultado da Criptografia
                    </div>
                    <div class="card-body">
                        <p class="mb-1 text-muted small fw-bold">Senha Criptografada (CRYPT_EXT_DES):</p>
                        <div class="p-3 bg-light border rounded text-break font-monospace small">
                            <?= htmlspecialchars($resultado) ?>
                        </div>
                    </div>
                </div>
        <?php endif; ?>
     </div>
    
    <?php include 'includes/footer.php'?>
</body>
</html>


