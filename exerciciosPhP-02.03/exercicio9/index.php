<?php
    include ("main.php");
    require_once ("functionMediaAritmetica.php");

    $stringNumeros = $_POST['listNum'];
    $arrayNumeros = preg_split('/[,\s]+/', $stringNumeros);
    
    echo MediaAritmetica($arrayNumeros);
?>
