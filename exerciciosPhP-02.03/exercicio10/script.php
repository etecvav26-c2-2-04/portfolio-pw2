<?php

  include("index.php");
  
  $ano = $_POST["ano"];

  if(isset($_POST)){
    // se o ano for multiplo de 4 e não de 0 ou multiplo de 400
    if( ( ($ano % 4 == 0) && $ano % 100 != 0) || ($ano % 400 == 0)){
      //mostra que o ano é bissexto
      echo $ano." é bissexto";
    }else{
      //mostra que o ano não é bissexto
      echo $ano." não é bissexto";
    }
  }

?>
