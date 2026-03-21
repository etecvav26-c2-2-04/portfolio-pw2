<?php
    include ("main.php");

    $stringNumeros = $_POST['listNum'];
    $arrayNumeros = preg_split('/[,\s]+/', $stringNumeros);

    foreach ($arrayNumeros as $numero) {
        echo $numero;
    }

?>
