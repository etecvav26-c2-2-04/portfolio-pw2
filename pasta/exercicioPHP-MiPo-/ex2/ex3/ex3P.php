<?php
include("ex3.html"); //liga o html ao php

$num1 = $_POST["n1"]; //associa a variavel do php a do html
$num2 = $_POST["n2"]; //associa a variavel do php a do html
$valor = $_POST["value"]; //associa a variavel do php a do html

if( $valor = "+") //se a variavel valor for +
{
    $resultado = $num1+$num2; //resultado é uma conta de adição das variaveis de numero
}
else if( $valor = "-") //se a variavel valor for -
{
    $resultado = $num1-$num2; //resultado é uma conta subtração das variaveis de numero
}
else if( $valor = "*") //se a variavel valor for *
{
    $resultado = $num1*$num2; //resultado é uma conta de multiplicação das variaveis de numero
}
else( $valor = "/") //senão
{
    $resultado = $num1/$num2; //resultado é uma conta de divisão das variaveis de numero
}

echo $resultado." é o resultado da operação."; //exibe o resultado da operação

?>
