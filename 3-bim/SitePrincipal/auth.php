<?php
function urlBase() {
    $docRoot = str_replace('\\', '/', rtrim($_SERVER['DOCUMENT_ROOT'], '/\\'));
    $dir     = str_replace('\\', '/', __DIR__);
    $base    = str_replace($docRoot, '', $dir);
    return $base . '/';
}

function estaLogado() {
    return isset($_SESSION['usuario_id']);
}

function ehAdmin() {
    return estaLogado() && !empty($_SESSION['usuario_admin']);
}

function exigirLogin() {
    if (!estaLogado()) {
        if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'GET' && isset($_SERVER['REQUEST_URI'])) {
            $_SESSION['login_redirect'] = $_SERVER['REQUEST_URI'];
        } else {
            $_SESSION['login_redirect'] = 'Carrinho.php';
        }
        header('Location: ' . urlBase() . 'login.php');
        exit;
    }
}

function exigirAdmin() {
    exigirLogin();
    if (!ehAdmin()) {
        header('Location: ' . urlBase() . 'Index.php?msg=acesso_negado');
        exit;
    }
}
?>