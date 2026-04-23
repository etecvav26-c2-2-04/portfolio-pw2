<?php
include("ex5H.php"); //Liga o html ao php
$n1 = $_POST["n1"]; //Associa a variavel do php a do html
$n2 = $_POST["n2"]; //Associa a variavel do php a do html
$n3 = $_POST["n3"]; //Associa a variavel do php a do html
$n4 = $_POST["n4"]; //Associa a variavel do php a do html
$n5 = $_POST["n5"]; //Associa a variavel do php a do html

    $fatorial1 = 1; //Inicia a variavel
    //Calcula o fatorial do primeiro numero
for ($i = $n1; $i > 1; $i--) {
    $fatorial1 *= $i;
}
    $fatorial2 = 1;
    //Calcula o fatorial do segundo numero
for ($i = $n2; $i > 1; $i--) {
    $fatorial2 *= $i;
}
    $fatorial3 = 1;
    //Calcula o fatorial do terceiro numero
for ($i = $n3; $i > 1; $i--) {
    $fatorial3 *= $i;
}
    $fatorial4 = 1;
    //Calcula o fatorial do quarto numero
for ($i = $n4; $i > 1; $i--) {
    $fatorial4 *= $i;
}
    $fatorial5 = 1;
//Calcula o fatorial do quinto numero
for ($i = $n5; $i > 1; $i--) {
    $fatorial5 *= $i;
}
echo $fatorial1 +$fatorial2 +$fatorial3 +$fatorial4 +$fatorial5; //Exibe a soma dos fatoriais enviados

?>
