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
    <form action="index.php" method="post">
      <!-- grau -->
      <label for="">Insira o Grau:</label>  
      <br>
      <input type="radio" name="grau" value="C">
      C<br>
      <input type="radio" name="grau" value="F">
      F<br>
      <!-- valor -->
      <label for="">Insira o valor:</label>
      <br>
      <input type="number" name="numero" placeholder="32">
      <br>
      <!-- botao -->
      <input type="submit" name="confirmar">
    </form>
</body>
</html>

<!-- transferi o codigo do antigo script.php, assim ficando mais compacto -->

<?php
  //verifica se o botão de confirmar foi apertado
  if(isset($_POST["confirmar"])){
    //verifica se um radio foi selecionado
    if(isset($_POST["grau"])){

      $grau = $_POST["grau"];
      $numero = $_POST["numero"];
      $conversao = 0;
      //pego a posição 0 da variavel grau e transfomo em caixa alta pra evitar problemas
      if(strtoupper($grau[0]) == "C"){
          //calculo simples pra converter para Fahrenheit
        $conversao = ($numero * 9/5) + 32;
        //mostrando o valor para o usuario
        echo "O valor em Fahrenheit é: ".$conversao;
      //aqui também pego a posição 0 da variavel grau e transfomo em caixa alta pra evitar problemas
      }elseif(strtoupper($grau[0]) == "F"){
        //calculo para converter para Celcius
        $conversao = ($numero - 32) * 5/9;
        //mostrando o valor para o usuario
        echo "O valor em Celsius é: ".$conversao;
      }
    }else{
      //caso o usuario não coloque um grau valido
      echo "Insira um grau";
    }
  }
?>
