<?php
    $numero  = $_POST['numero'];

    if ($numero > 100 && $numero < 200) {
        echo $numero." está entre 100 e 200";
    }
    else {
        echo $numero." não está entre 100 e 200";
    }

?>
