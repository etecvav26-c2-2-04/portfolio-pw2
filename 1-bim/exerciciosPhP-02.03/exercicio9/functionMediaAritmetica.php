<?php
    function MediaAritmetica($numeros)
    {
        $soma = 0;
        foreach ($numeros as $numero)
        {
            $soma += $numero; 
            //O motivo do erro era a sintaxe do código
        }

        $resultado = $soma / count($numeros); 
        //a função do count($numeros) é contar o tamanho da array para divisão correta
        
        return $resultado;
    }

?>
