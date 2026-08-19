<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesquisa CriptografiasPHP</title>
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
                        <a class="nav-link active" aria-current="page" href="Hash.php">Hash</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Crypt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="mx-auto p-2" style=" margin: 5%; width: 75%;">
            <p>
                <h4> Resumo da Pesquisa </h4>
                Para este estudo, selecionamos três das bibliotecas e abordagens mais consolidadas e amplamente utilizadas no mercado de desenvolvimento PHP: <br>
                É importante ressaltar que este material possui um caráter estritamente educacional. Para fins didáticos e para facilitar o entendimento do processo de reversão e verificação dos algoritmos, o projeto apresentará a senha descriptografada diretamente na interface do site.
                <ul>
                    <li> OpenSSL: Uma biblioteca robusta que fornece diversas funções de criptografia 
                        simétrica e assimétrica, amplamente utilizada para comunicação segura e manipulação de certificados.
                    </li>

                    <li>   
                        Sodium Crypt: Considerada o padrão moderno para criptografia no PHP 
                        (introduzida como extensão nativa no PHP 7.2), oferece uma API de alto nível, segura por padrão e resistente a erros de implementação comum.
                    </li>

                    <li>
                        Hash (Funções de Hashing): Focada em funções de dispersão unidirecionais (como password_hash e bcrypt),
                        essenciais para o armazenamento seguro de senhas e integridade de dados.
                    </li>
                </ul>
                <h4> Objetivo Didático </h4>
                Em ambientes de produção reais, a exibição de senhas descriptografadas ou o armazenamento de dados sensíveis em texto puro é estritamente contraindicado, devendo-se seguir as melhores práticas de segurança da informação.
            <p>
        </div>

    </body>
    <footer>
        <div class="sticky-bottom">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <span class="navbar-text"> Site feito por João G. S. Carvalho & Poliany C. Souza </span>
                </div>
            </nav>
        </div>
    </footer>
</html>
