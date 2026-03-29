
<!--
Data: 19/03/2026
Autor: Gabriel Henrique
Objetivo: Aprofundar os conhecimentos em HTML e PHP

Exercício 6 - Série de Fibonacci
Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Fibbonacci</title>
</head>
<body>
  <div class="container">
    <h2>Sequência de Fibonacci</h2>
    <p>Digite quantos termos você deseja visualizar:</p>
    
    <form action="script.php" method="post">
      <input type="number" name="numero" placeholder="Ex: 12" required class="inputTxt">
      <input type="submit" class="submit">
    </form>
  </div>
</body>
</html>


