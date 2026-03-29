<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['numero_n'];

    $a = 0;
    $b = 1;

    echo "Resultado: <br>";

    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        
        $proximo = $a + $b;
        $a = $b;
        $b = $proximo;
    }
}
?>