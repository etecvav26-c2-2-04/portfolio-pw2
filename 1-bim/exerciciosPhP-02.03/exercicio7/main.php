<!--
Data: 15/03/2026
Autor: João Gabriel
Objetivo: Aprofundar os conhecimentos em HTML e PHP

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Números positivos e negativos</title>
</head>
<body>
    <form action="main.php" method="get">

        <label>Insira o primeiro número: </label>
        <input type="number" name="num[]" step="any" required>
        <br> <br>

        <label>Insira o segundo número: </label>
        <input type="number" name="num[]" step="any" required>
        <br> <br>

        <label>Insira o terceiro número: </label>
        <input type="number" name="num[]" step="any" required>
        <br> <br>

        <label>Insira o quarto número: </label>
        <input type="number" name="num[]" step="any" required>
        <br> <br>

        <label>Insira o quinto número: </label>
        <input type="number" name="num[]" step="any" required>
        <br> <br>

        <label>Insira o sexto número: </label>
        <input type="number" name="num[]" step="any" required>
        <br> <br>

        <label>Insira o setimo número: </label>
        <input type="number" name="num[]" step="any" required>
        <br> <br>

        <label>Insira o oitavo número: </label>
        <input type="number" name="num[]" step="any" required> 
        <br>
        <!-- O uso do num [] indica para o PHP o uso de uma lista, ou vetor-->

        <button> Enviar </button>
        <br> <br>
    </form>
</body>
</html>
