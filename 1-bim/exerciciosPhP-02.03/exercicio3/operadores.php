<?php
    include("main.php");

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];

    $operador = $_GET["operador"];

    switch($operador){
        case '1':
            echo "O resultado da conta é ".($n1+$n2);
            break;
        case '2':
            echo "O resultado da conta é ".($n1-$n2);
            break;
        case '3':
            echo "O resultado da conta é ".($n1*$n2);
            break;
        case '4':
            echo "O resultado da conta é ".($n1/$n2);
            break;
    }
    //switch é a melhor opção por dimuir o código, funcionando quase da mesma maneira que if else, ocupando menos linhas
?>
