<?php
    include ("main.php");
    require_once ("functionMediaAritmetica.php");

    $stringNumeros = $_POST['listNum'];
    $arrayNumeros = preg_split('/[,\s]+/', $stringNumeros);
    /*
        Fiz uma breve pesquisa e encontrei a funcionalidade preg_split:
        A função preg_split() no PHP serve para dividir (quebrar) uma string em um array, 
        utilizando expressões regulares (regex) como delimitador. 
    */

    echo "A média Aritmética de ";
    foreach ($arrayNumeros as $numero){
        echo $numero.", ";
    }
    echo " é: ".MediaAritmetica($arrayNumeros);
    //Essa cadeia de repetição serve para mostrar ao usuario os valores somados e logo após o resultado
    
?>
