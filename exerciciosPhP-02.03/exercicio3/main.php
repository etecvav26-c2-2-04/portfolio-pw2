<!--
Data: 15/03/2026
Autor: João Gabriel
Objetivo: Aprofundar os conhecimentos em HTML e PHP

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Calculadora aritmética </title>
</head>
<body>
    <form action="operadores.php" method="get">

        <label> Insira o primeiro número: </label>
        <input type="number" name="n1" step="any" required>
        <label> Insira o segundo número: </label>
        <input type="number" name="n2" step="any" required>
        <br> <br>
        
        <label> Insira um operador: </label>
        <br>

        <input type="radio" name="operador" id="1" value="1" required>
        <label for="1">Soma </label>
        <br>

        <input type="radio" name="operador" id="2" value="2" required>
        <label for="2"> Subtração </label>
        <br>

        <input type="radio" name="operador" id="3" value="3" required>
        <label for="3"> Multiplicação </label>
        <br>

        <input type="radio" name="operador" id="4" value="4" required>
        <label for="4">Divisão</label>
        <!-- 
        O input type="radio" serve para permitir que o usuario utilize apenas um operador por vez,
        use o mesmo "name" nos inputs para o servidor entender que apenas uma daquelas opções sera marcadas
        -->
        <br> <br>
        
        <button> Enviar </button>
        <br><br>
    </form>
</body>
</html>
