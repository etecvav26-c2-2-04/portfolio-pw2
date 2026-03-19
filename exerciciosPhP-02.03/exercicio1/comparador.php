<?php
    include("main.php"); //Inclui o formulário feito em HTML para a página em PHP

    $numero = $_POST["numero"];
    /*Define que a variável numero terá seu valor definido a partir do input numero no HTML,
    por meio do post que captura dados pelo corpo da requisição*/

    if ($numero > 100 && $numero < 200) //Compara se a variavel numero está entre 100 e 200
    { 
        echo $numero . " está entre 100 e 200"; 
        //Se as duas comparações são verdadeiras, exibe a mensagem
    } else 
    {
        echo $numero . " não está entre 100 e 200";
        //Se uma das duas comparações não são verdadeiras, exibe outra mensagem
    }
?>
