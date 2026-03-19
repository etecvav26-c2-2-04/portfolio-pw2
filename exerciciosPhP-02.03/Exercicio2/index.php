<!--
Data: 18/03/2026
Autor: Gabriel Henrique
Objetivo: Aprofundar os conhecimentos em HTML e PHP

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de temperaturas</title>
</head>
<body>
    <form action="script.php" method="post">
      <label for="">Insira o Grau:</label>  
      <br>
      <input type="text" name="grau" placeholder="C/F">
      <br>
      <label for="">Insira o valor:</label>
      <br>
      <input type="number" name="numero" placeholder="32">
      <br>
      <input type="submit">
    </form>
</body>
</html>
