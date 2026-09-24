<?php
/**
 * auth.php
 * Funções auxiliares de autenticação/autorização.
 *
 * IMPORTANTE: quem incluir este arquivo já deve ter chamado session_start()
 * antes, pois aqui só LEMOS o $_SESSION (não iniciamos a sessão de novo).
 */

// Retorna true se existe um usuário logado na sessão atual.
function estaLogado() {
    return isset($_SESSION['usuario_id']);
}

// Retorna true se o usuário logado é administrador.
function ehAdmin() {
    return estaLogado() && !empty($_SESSION['usuario_admin']);
}

// Bloqueia o acesso à página caso o usuário não esteja logado,
// mandando ele para login.php. Guarda a página que ele tentou
// acessar para podermos voltar pra lá depois do login.
function exigirLogin() {
    if (!estaLogado()) {
        if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'GET' && isset($_SERVER['REQUEST_URI'])) {
            $_SESSION['login_redirect'] = $_SERVER['REQUEST_URI'];
        } else {
            // Se o bloqueio aconteceu numa ação de POST (ex: adicionar ao
            // carrinho), não faz sentido redirecionar de volta pro script
            // de ação, então mandamos para o Carrinho.
            $_SESSION['login_redirect'] = 'Carrinho.php';
        }
        header('Location: login.php');
        exit;
    }
}

// Bloqueia o acesso à página caso o usuário não seja administrador.
function exigirAdmin() {
    exigirLogin();
    if (!ehAdmin()) {
        header('Location: Index.php?msg=acesso_negado');
        exit;
    }
}
?>
