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
      }else{
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
