<?php
include("ex2H.php"); //liga o html ao php

$temp = $_POST["temp"]; //associa a variavel do php a do html
$escala = $_POST["escala"]; //associa a variavel do php a do html


if ($escala = "f" && $escala = "F") //se a escala de temperatura estiver em fahrenheit
{ 
   $converter = 5/9*($temp-32); //formula para converter fahrenheit em celsius
}
else //se nao estiver em fahrenheit
{ 
    $converter = ($temp*9/5)+32; //formula para converter celsius em fahrenheit
}
echo $converter." é a temperatura apos a conversao"; //mostra a temperatura apos a conversao

?>
