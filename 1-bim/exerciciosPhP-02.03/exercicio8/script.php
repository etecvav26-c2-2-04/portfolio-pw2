<?php

    include("index.php");

    $numero = $_POST["numero"];
    function soma($n)
    {
        $total = 0;
        for($i = 1; $i <= $n; $i++) {
            $total += $i;
        }
        return $total;
    }

    $resultado = soma($numero);
    echo "a some de 0 ate $numero é ".$resultado;