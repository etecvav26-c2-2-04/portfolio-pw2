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

     <div class="container my-4">

        <div class="card bg-body-tertiary border-0 shadow-sm mb-4">

            <div class="card-header bg-transparent border-0 pt-3 pb-0">
                <h5 class="card-title fw-bold text-dark mb-0">
                    <i class="bi bi-shield-lock-fill text-primary"></i>O que é o OpenSSL?
                </h5>
            </div>

            <div class="card-body">
                <p class="card-text text-secondary mb-0">
                    O <strong>OpenSSL</strong> funciona como o motor de segurança da internet. Além de implementar os protocolos TLS/SSL para <strong>conexões seguras (HTTPS)</strong>, no PHP ele atua como a principal biblioteca nativa para <strong>criptografar e descriptografar dados sensíveis</strong> (usando algoritmos robustos como AES-256), gerando chaves de segurança e garantindo a integridade das informações.
                </p>
            </div>

        </div>
        
        <div class="card-body p-4">
            <form action="" method="POST">
                
                <div class="mb-3">
                    <label for="mensagem" class="form-label fw-semibold">
                        <i class="bi bi-chat-left-text me-1"></i>Mensagem Original:
                    </label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Digite aqui o texto ou senha que deseja proteger..." required></textarea>
                </div>


                <div class="mb-4">
                    <label for="chave" class="form-label fw-semibold">
                        <i class="bi bi-key me-1"></i>Chave Secreta:
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-shield-shaded"></i></span>
                        <input type="password" class="form-control" id="chave" name="chave" placeholder="Sua chave de criptografia" required>
                    </div>
                    <div class="form-text">Guarde esta chave. Ela é necessária para recuperar a mensagem original no processo de descriptografia.</div>
                </div>

                
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" name="acao" value="criptografar" class="btn btn-dark fw-bold">
                        <i class="bi bi-shield-lock-fill me-1"></i> Criptografar
                    </button>
                </div>

            </form>
        </div>
     </div>
    
    <?php include 'includes/footer.php'?>
</body>
</html>
