<?php
include("ex3.html");

$num1 = $_POST["n1"];
$num2 = $_POST["n2"];
$valor = $_POST["value"];

if( $valor = "+")
{
    $resultado = $num1+$num2;
}
else if( $valor = "-")
{
    $resultado = $num1-$num2;
}
else if( $valor = "*"){
    $resultado = $num1*$num2;
}
else( $valor = "/"){
    $resultado = $num1/$num2;
}

echo $resultado." é o resultado da operação.";





?>
