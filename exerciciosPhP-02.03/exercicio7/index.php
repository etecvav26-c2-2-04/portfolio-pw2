<?php
    include("main.php");

    $numeros = $_GET['num']; // Pega todos os input nomeados num e transforma em uma lista
    $numpositivo = [];
    $numnegativo = [];
    //Criação de duas listas vazias para injeção de valores

    foreach ($numeros as $numero) //Vai percorrer em loop os valores armazenados em $numeros
    {
        if ($numero >= 0)
        {
            $numpositivo[] = $numero; //Se o número for maior ou igual a 0 será armazenado na lista de positivos
        }
        else
        {
            $numnegativo[] = $numero; //Se não, o valor será armazenado na lista de negativos
        }
    }
    echo "São positivos: <br>";

    foreach ($numpositivo as $positivo) //Percorre os valores na lista de positivos
    {
        echo $positivo."<br>"; //E os exibe
    }
    echo "São negativos: <br>";

    foreach ($numnegativo as $negativo) //Percorre os valores na lista de negativos
    {
        echo $negativo."<br>"; // E os exibe
    }


?>
