<?php
    include ("main.html");
    require_once ("functionFatorial.php");

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];
    $n5 = $_GET["n5"];

    echo fatorial($n1) + fatorial($n2) + fatorial($n3) + fatorial($n4) + fatorial($n5);

?>
