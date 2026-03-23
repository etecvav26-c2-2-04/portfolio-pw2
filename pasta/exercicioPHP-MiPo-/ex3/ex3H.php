<!--
Data: 19/03
Nome: Poliany Chaves de Souza
Objetivo: Aprofundar os conhecimentos em HTML e PHP

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+","-","*" ou "/") 
-O programa deve mostrar o resultado da operação
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
    
    <form action="ex3P.php" method="post">
    
        <label>Insira o primero numero:</label> <!--Insere um texto-->
        <input type="text" name="n1" step="any" required> <!--Insere uma caixa de texto obrigatoria que recebe numeros decimais-->
        
        <br><br> <!--Quebra de linha-->
        
        <label>Qual operação deve ser realizada:</label> <!--Insere um texto-->
        <input type="button" value="+">
        <input type="button" value="-">
        <input type="button" value="*">
        <input type="button" value="/">
        
        <br><br>
        
        <Label>Insira o segundo numero</Label> <!--Insere um texto-->
        <input type="text" name="n2" step="any" required> <!--Insere uma caixa de texto obrigatoria que recebe numeros decimais-->
        <br><br>
        
        <button>Enviar</button>
        
    </form>

</body>
</html>
