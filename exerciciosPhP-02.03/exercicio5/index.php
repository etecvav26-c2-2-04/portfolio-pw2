<?php
    include ("main.php"); //Inclui o código HTML na página PHP, para melhorar a experiência de usuário
    require_once ("functionFatorial.php"); //Vai requerir o código incluso no arquivo

    $n1 = fatorial($_GET["n1"]);
    $n2 = fatorial($_GET["n2"]);
    $n3 = fatorial($_GET["n3"]);
    $n4 = fatorial($_GET["n4"]);
    $n5 = fatorial($_GET["n5"]);
    //calculo fatorial usando o input do HTML como variável

    echo "A soma dos fatoriais é ".($n1+$n2+$n3+$n4+$n5)."<br>";
    //Exibição final da soma de todas os fatoriais calculados
?>
