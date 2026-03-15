<?php
    $numeros = array
    (
        $_GET["n1"],
        $_GET["n2"],
    );
    foreach ($numeros as $numero) {
        echo $numero . "<br>";
    }
?>
