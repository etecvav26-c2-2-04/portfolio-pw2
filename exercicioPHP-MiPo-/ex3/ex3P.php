<?php
include("ex3.html");

$num1 = $_POST["n1"];
$num2 = $_POST["n2"];
$valor = $_POST["value"];

if( $valor == "+") //se a variavel valor for +
{
    $resultado = $num1+$num2; //resultado é uma conta de adição das variaveis de numero
}
else if( $valor == "-") //se a variavel valor for -
{
    $resultado = $num1-$num2; //resultado é uma conta subtração das variaveis de numero
}
else if( $valor == "*") //se a variavel valor for *
{
    $resultado = $num1*$num2; //resultado é uma conta de multiplicação das variaveis de numero
}
else //senão
{
    $resultado = $num1/$num2; //resultado é uma conta de divisão das variaveis de numero
}

echo $resultado." é o resultado da operação."; //exibe o resultado da operação





?>
