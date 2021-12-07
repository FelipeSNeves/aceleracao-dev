<?php

    function validarQuantidade($salgados, $acompanhamentos, $refrigerantes) {

        if(count($salgados) < 3) {
            echo 'A quantidade de salgados não obedece a quantidade mínima necessária <br>';
        } elseif(count($salgados) > 6) {
            echo 'A quantidade de salgados não obedece a quantidade máxima necessária <br>';
        } else {
            echo "SALGADOS: <br><br>";
            foreach ($salgados as $chaves => $valores) {
                echo "$chaves => $valores <br>";
            }
            echo "<br>";
        }
    
        if(count($acompanhamentos) < 3) {
            echo 'A quantidade de acompanhamentos não obedece a quantidade mínima necessária <br>';
        } elseif(count($acompanhamentos) > 6) {
            echo 'A quantidade de acompanhamentos não obedece a quantidade máxima necessária <br>';
        } else {
            echo "Acompanhamentos: <br><br>";
            foreach ($acompanhamentos as $chaves => $valores) {
                echo "$chaves => $valores <br>";
            }
        }
    
        echo "<br>";
    
        if(count($refrigerantes) < 3) {
            echo 'A quantidade de refrigerantes não obedece a quantidade mínima necessária <br>';
        } elseif(count($refrigerantes) > 6) {
            echo 'A quantidade de refrigerantes não obedece a quantidade máxima necessária <br>';
        } else {
            echo "Refrigerantes: <br><br>";
            foreach ($refrigerantes as $chaves => $valores) {
                echo "$chaves => $valores <br>";
            }
        }

    }

?>