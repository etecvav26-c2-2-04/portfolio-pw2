<?php
    function fatorial($numero){
        $i = $numero;
        for($i; $i > 2; $i--) //enquanto a variavel I for maior que 2 o código se repetira, cada vez diminuindo I para não se tornar infinito
        {
            $numero = $numero * ($i-1); 
            /* 
            a variavel numero vai ser igual a i-1 multiplicado pelo numero
            primeira repetição -> numero = 5 * (5-1) || segunda repetição numero = 20 * (4-1) 
            o for vai se repetir até o fatorial se parecer com -> 5! = 5*4*3*2, excluindo o 1 pois ele não altera o valor
            */
        }
        return $numero; //Por fim a função vai retornar o valor final, reduzindo o código final
    }
?>
