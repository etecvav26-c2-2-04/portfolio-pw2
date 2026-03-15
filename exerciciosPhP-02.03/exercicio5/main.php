<?php
    include ("main.html");
    require_once ("functionFatorial.php");

    $n1 = fatorial($_GET["n1"]);
    $n2 = fatorial($_GET["n2"]);
    $n3 = fatorial($_GET["n3"]);
    $n4 = fatorial($_GET["n4"]);
    $n5 = fatorial($_GET["n5"]);

    echo "A soma dos fatoriais é ".($n1+$n2+$n3+$n4+$n5)."<br>";

?>
