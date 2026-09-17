<?php
require_once('DataBase/Connection.php');

$clientes = $pdo->query("
    SELECT id_cliente, nome, email, cpf, celular, endereco, estado, cidade, data_cadastro
    FROM Clientes
    ORDER BY id_cliente DESC
")->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'partials/navbar.php'; ?>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Usuários Cadastrados</h2>
            <a href="FormCadastro.php" class="btn btn-primary">+ Novo Usuário</a>
        </div>

        <?php if (isset($_GET['msg']) && $_GET['msg'] === 'excluido'): ?>
            <div class="alert alert-success">Usuário excluído com sucesso!</div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Celular</th>
                        <th>Endereço</th>
                        <th>Cidade/UF</th>
                        <th>Cadastrado em</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($clientes)): ?>
                        <tr><td colspan="8" class="text-center">Nenhum usuário cadastrado ainda.</td></tr>
                    <?php endif; ?>

                    <?php foreach ($clientes as $cliente): ?>
                        <tr>
                            <td><?= htmlspecialchars($cliente['nome']) ?></td>
                            <td><?= htmlspecialchars($cliente['email']) ?></td>
                            <td><?= htmlspecialchars($cliente['cpf']) ?></td>
                            <td><?= htmlspecialchars($cliente['celular'] ?? '—') ?></td>
                            <td><?= htmlspecialchars($cliente['endereco'] ?? '—') ?></td>
                            <td><?= htmlspecialchars(($cliente['cidade'] ?? '—') . '/' . ($cliente['estado'] ?? '')) ?></td>
                            <td><?= htmlspecialchars(date('d/m/Y', strtotime($cliente['data_cadastro']))) ?></td>
                            <td>
                                <a href="CRUD/cliente_deletar.php?id=<?= $cliente['id_cliente'] ?>"
                                   class="btn btn-sm btn-outline-danger"
                                   onclick="return confirm('Tem certeza que deseja excluir este usuário?');">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
