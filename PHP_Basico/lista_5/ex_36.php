<?php

    // Substitua o laço de repetição while por um laço de repetição for. Depois exibe o resultado do fatorial usando var_export()
        
        // while($contador <= $n) {
        //     $fatorial = $fatorial * $contador;
        //     $contador++;
        // }

        $n = 6;
        $fatorial = 1;
        $contador = 1;
        
        for($contador = 1; $contador <= $n; $contador++) {
            $fatorial *= $contador;
        }

        var_export($fatorial);

?>
