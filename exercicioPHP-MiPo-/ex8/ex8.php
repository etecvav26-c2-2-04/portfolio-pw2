<?php
function soma($n) {
    $total = 0;
    for ($i = 0; $i <= $n; $i++) {
        $total += $i;
    }
    return $total;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['numero_final'];

    $resultado = soma($n);

    echo "A soma de 0 até $n é: " . $resultado;
}
?>