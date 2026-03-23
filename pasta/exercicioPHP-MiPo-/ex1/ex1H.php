<!--
Data: 23/03
Nome: Poliany Chaves de Souza
Objetivo: Aprofundar os conhecimentos em HTML e PHP

Exercício 1 - Intervalo entre 100 e 200
Faça um programa que receba um númerc e diga se este número está no intervalc entre 100 e 200.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    
    <form action="ex1.php" method="post"> <!--Cria um formulario-->
        
        <label>Insira um numero:</label> <--Insere um texto-->
        <input type="text" name="n1" step="any" required> <--Insere uma caixa de texto que recebe numeros racionais(Required faz com que seja obrigatorio inserir um numero)-->

        <br><br> <--Quebra de linha-->

        <label>Insira o segundo numero:</label> <--Insere um texto-->
        <input type="text" name="n2" step="any" required> <--Insere uma caixa de texto que recebe numeros racionais(Required faz com que seja obrigatorio inserir um numero)-->

        <br><br> <--Quebra de linha-->

        <button>Enviar</button> <--Cria um botao-->

    </form>

</body>
</html>
