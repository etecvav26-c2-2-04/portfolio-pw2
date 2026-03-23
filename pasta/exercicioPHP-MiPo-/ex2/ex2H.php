<!--
Data:19/03
Nome: Poliany Chaves de Souza
Objetivo: Aprofundar os conhecimentos em HTML e PHP

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius
Depois, o programa deve converter para a outra unidade.
Fórmula: C = 5/9 x (F - 32)

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
    
    <form action="ex2P.php" method="post"> <!--Cria um formulario-->
    
        <label>Insira uma temperatura</label> <!--Insere um texto-->
        <input type="text" name="temp" required> <!--Insere uma caixa de texto obrigatoria-->
        
        <br><br> <!--Quebra de linha-->
        
        <label>Informe a escala de temperatura</label> <!--Insere um texto-->
        <input type="text" name="escala" required> <!--Insere uma caixa de texto obrigatoria-->
        
        <br><br> <!--Quebra de linha-->
        
        <button>Enviar</button> <!--Cria um botao-->
    
    </form>

</body>
</html>
