<?php
include("ex2H.php");


$temp = $_POST["temp"]; 
$escala = $_POST["escala"];


if ($escala = "f" && $escala = "F"){ 
   $converter = 5/9*($temp-32); 
} else { 
    $converter = ($temp*9/5)+32; 
}
echo $converter." é a temperatura apos a conversao"; 












?>
