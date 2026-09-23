<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa CriptografiasPHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <!-- Card Principal -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4 p-md-5">
                        
                        <!-- Título da Pesquisa -->
                        <h2 class="card-title text-primary fw-bold mb-2">
                            <i class="bi bi-journal-text"></i>Resumo da Pesquisa
                        </h2>
                        
                        <!-- Introdução -->
                        <p class="card-text text-secondary lead fs-6 mb-4 ">
                            Para este estudo, selecionamos três das abordagens mais consolidadas e amplamente utilizadas no mercado de desenvolvimento PHP. Decidimos utilizar apenas as <strong>funções e bibliotecas nativas</strong> que já vêm integradas por padrão no PHP, sem a necessidade de baixar pastas, usar o Composer ou instalar dependências externas. Essa escolha visa manter o dinamismo da apresentação e facilitar a reprodução do projeto por qualquer pessoa que tenha um ambiente PHP padrão configurado.
                        </p>

                        <hr class="my-4 text-muted">

                        <!-- Seção de Ferramentas -->
                        <h4 class="fw-bold mb-3 text-dark">Ferramentas Nativas Utilizadas</h4>
                        
                        <div class="row g-3 mb-4">
                            <!-- OpenSSL -->
                            <div class="col-md-4">
                                <div class="card h-100 border-0 bg-body-tertiary p-3">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold text-dark mb-3">
                                            <i class="bi bi-shield-lock-fill text-primary"></i>OpenSSL
                                        </h5>
                                        <p class="card-text small text-muted">
                                            Uma biblioteca robusta que fornece diversas funções de criptografia simétrica e assimétrica, amplamente utilizada para comunicação segura. A extensão já vem habilitada na grande maioria das instalações modernas e permite criptografar e descriptografar textos de forma segura.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Sodium Crypt -->
                            <div class="col-md-4">
                                <div class="card h-100 border-0 bg-body-tertiary p-3">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold text-dark mb-3">
                                            <i class="bi bi-cpu-fill text-success"></i>Sodium Crypt
                                        </h5>
                                        <p class="card-text small text-muted">
                                            Considerada o padrão moderno para criptografia no PHP, introduzida diretamente no núcleo (core) da linguagem a partir da versão 7.2. Oferece uma API de alto nível, segura por padrão, diretamente nas funções nativas do PHP (prefixadas com <code class="text-danger">sodium_</code>).
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Hashing -->
                            <div class="col-md-4">
                                <div class="card h-100 border-0 bg-body-tertiary p-3">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold text-dark mb-3">
                                            <i class="bi bi-key-fill text-warning"></i>Hashing
                                        </h5>
                                        <p class="card-text small text-muted">
                                            Focada em funções de dispersão unidirecionais para armazenamento seguro de senhas. O PHP oferece a API <code class="text-danger">password_hash</code>, que implementa automaticamente algoritmos robustos como o Bcrypt e gera salts aleatórios sem configurações complexas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Alerta Didático -->
                        <div class="alert alert-warning border-0 shadow-sm p-4 mb-0" role="alert">
                            <h5 class="alert-heading fw-bold d-flex align-items-center mb-2">
                                <i class="bi bi-exclamation-triangle-fill text-warning me-2 fs-4"></i> Objetivo Didático
                            </h5>
                            <p class="mb-2">
                                É importante ressaltar que este material possui um caráter estritamente educacional. Para fins didáticos e para facilitar o entendimento do processo de reversão e verificação dos algoritmos, o projeto apresentará a senha descriptografada diretamente na interface do site.
                            </p>
                            <hr class="border-warning">
                            <p class="mb-0 small text-muted">
                                <strong>Nota de Segurança:</strong> Em ambientes de produção reais, a exibição de senhas descriptografadas ou o armazenamento de dados sensíveis em texto puro é estritamente contraindicado, devendo-se seguir as melhores práticas de segurança da informação. Senhas de usuários reais devem ser tratadas exclusivamente com funções irreversíveis (como o <code>password_hash</code>).
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'?>
</body>
</html>
