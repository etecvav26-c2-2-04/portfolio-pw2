<?php

  include("index.php");

  $numero = $_POST["numero"];
  $ultimoNum = 0;
  $atual = 1;

  for($i=0; $i < $numero; $i++){

    // Numero atual + ultimo numero = proximo numero
    //       5      +        3      =        8
    $proxNum = $atual + $ultimoNum;

    //exibe o valor atual do resultado
    echo $ultimoNum. ($i< $numero -1 ?", ":""); 

    //muda os valores pro calculo funcionar novamente
    $ultimoNum = $atual;
    $atual = $proxNum;
  
  }
?>