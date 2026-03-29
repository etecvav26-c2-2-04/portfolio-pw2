<?php
function media($v) {
    $quantidade = count($v);
    
    if ($quantidade == 0) return 0;

    $soma = array_sum($v);
    return $soma / $quantidade; // Retorna a média
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $entrada = $_POST['lista'];
    $vetor = explode(" ", trim($entrada));

    $resultado = media($vetor);

    echo "Os números digitados foram: " . implode(", ", $vetor) . "<br>";
    echo "A média aritmética é: <b>" . number_format($resultado, 2) . "</b>";
    
}
?>