<?php
    function MediaAritmetica($numeros)
    {
        $soma = 0;
        foreach ($numeros as $numero)
        {
            $soma = $numero + $soma; 
            //Por algum motivo que eu desconheço, ele não estava entendendo =+
        }

        $resultado = $soma / count($numeros); 
        //a função do count($numeros) é contar o tamanho da array para divisão correta
        
        return $resultado;
    }

?>
