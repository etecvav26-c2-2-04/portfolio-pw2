<?php
session_start();
require_once('auth.php');
require_once('DataBase/Connection.php');

// Se já está logado, não faz sentido mostrar a tela de login de novo.
if (estaLogado()) {
    header('Location: Index.php');
    exit;
}

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';

    $stmt = $pdo->prepare(
        "SELECT id_cliente, nome, email, SenhaHash, is_admin
         FROM Clientes
         WHERE email = :email"
    );
    $stmt->execute([':email' => $email]);
    $usuario = $stmt->fetch();

    if ($usuario && password_verify($senha, $usuario['SenhaHash'])) {
        // Login OK: guarda os dados do usuário na sessão.
        $_SESSION['usuario_id']    = $usuario['id_cliente'];
        $_SESSION['usuario_nome']  = $usuario['nome'];
        $_SESSION['usuario_admin'] = (bool) $usuario['is_admin'];

        // Volta para a página que o usuário tentou acessar antes do login
        // (ex: o Carrinho), ou para a Index se não houver nenhuma.
        $destino = $_SESSION['login_redirect'] ?? 'Index.php';
        unset($_SESSION['login_redirect']);

        header('Location: ' . $destino);
        exit;
    } else {
        $erro = 'Email ou senha inválidos.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'partials/navbar.php'; ?>

    <div class="container" style="max-width: 420px;">
        <h2 class="mb-4 text-center">Login</h2>

        <?php if ($erro): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($erro) ?></div>
        <?php endif; ?>

        <form class="row g-3" action="login.php" method="post">
            <div class="col-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail" required autofocus>
            </div>

            <div class="col-12">
                <label for="inputSenha" class="form-label">Senha</label>
                <input name="senha" type="password" class="form-control" id="inputSenha" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </div>

            <div class="col-12 text-center">
                <span>Não tem conta? <a href="FormCadastro.php">Cadastre-se</a></span>
            </div>
        </form>
    </div>
</body>
</html>
