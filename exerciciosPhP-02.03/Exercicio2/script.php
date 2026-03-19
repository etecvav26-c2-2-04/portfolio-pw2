<?php
  include("index.php");

  $grau = $_POST["grau"];
  $numero = $_POST["numero"];
  $conversao = 0;

  if(strtoupper($grau[0]) == "C"){
    $conversao = ($numero * 9/5) + 32;
    echo "O valor em Fahrenheit é: ".$conversao;
  }elseif(strtoupper($grau[0]) == "F"){
    $conversao = ($numero - 32) * 5/9;
    echo "O valor em Celsius é: ".$conversao;
  }else{
    echo "Insira um grau valido";
  }
?>