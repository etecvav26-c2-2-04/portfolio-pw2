<?php
    function MediaAritmetica($numeros)
    {
        $soma = 0;
        foreach ($numeros as $numero)
        {
            $soma = $numero + $soma; //Por algum motivo que eu desconheço, ele não estava entendendo =+
            echo "$soma <br>";
        }

        $resultado = $soma / count($numeros);
        return $resultado;
    }

?>
