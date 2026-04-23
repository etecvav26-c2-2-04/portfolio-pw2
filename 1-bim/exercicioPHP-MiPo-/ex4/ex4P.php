<?php
include("ex4H.php"); //Liga o HTML ao PHP

$num = $_POST["num"]; //Associa a variavel do PHP a do HTML

for ($i=1; $i <= $num; $i++) //Controla quantas linhas o triangulo numerico tera
{
for ($j = 1; $j <= $i; $j++) //Escreve os numeros de um até o numero escolhido
{
        echo $j . " ";
}
        echo "<br>"; //Quebra de linha após terminar de escrever a sequencia de numeros
}

?>
