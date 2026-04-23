<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST;

    $positivos = "";
    $negativos = "";

    foreach ($numeros as $n) {
        if ($n >= 0) {
            $positivos .= $n . " ";
        } else {
            $negativos .= $n . " ";
        }
    }

    echo "Positivos: " . $positivos . "<br>";
    echo "Negativos: " . $negativos;
}
?>