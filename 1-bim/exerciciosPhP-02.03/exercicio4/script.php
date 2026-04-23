<?php

  include("index.php");

  $numero = $_POST["numero"];

  // O primeiro loop passa pr cada linha de 1 até n
  for($i=1; $i <= $numero; $i++){
    //O segundo loop mostra os números de 1 até o valor da linha atual
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    //Pula para a próxima linha após terminar
    echo "<br>";

  }

?>