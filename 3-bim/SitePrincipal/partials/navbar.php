<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="Index.php">EntreLinhas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="Loja.php">Loja</a></li>
        <li class="nav-item"><a class="nav-link" href="Carrinho.php">Carrinho</a></li>
        <?php if (function_exists('ehAdmin') && ehAdmin()): ?>
          <li class="nav-item"><a class="nav-link" href="Produtos.php">Gerenciar Produtos</a></li>
          <li class="nav-item"><a class="nav-link" href="Usuarios.php">Usuários</a></li>
          <li class="nav-item"><a class="nav-link" href="admin.php">Painel Admin</a></li>
        <?php endif; ?>
      </ul>
      <ul class="navbar-nav">
        <?php if (function_exists('estaLogado') && estaLogado()): ?>
          <li class="nav-item">
            <span class="nav-link disabled">Olá, <?= htmlspecialchars($_SESSION['usuario_nome']) ?></span>
          </li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="FormCadastro.php">Cadastro</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
