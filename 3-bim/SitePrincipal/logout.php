<?php
session_start();

// Limpa sessão
$_SESSION = [];
session_destroy();

header('Location: login.php');
exit;
?>
