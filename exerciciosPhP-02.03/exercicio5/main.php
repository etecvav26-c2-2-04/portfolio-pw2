<?php
    include ("main.html");
    require_once ("functionFatorial.php");

    $n1 = $_GET["n1"];
    echo fatorial($n1);
?>
