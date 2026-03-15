<?php
    function fatorial($numero){
        $i = $numero;
        for($i; $i > 2; $i--)
        {
            $numero = $numero * ($i-1);
        }
        return $numero;
    }
?>
