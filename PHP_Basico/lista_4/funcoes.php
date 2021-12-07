<?php

    function somarValores($valorUm, $valorDois) {
        $soma = $valorUm + $valorDois;
        echo "$soma <br>";
    }

    function imparOuPar($numero) {
        if($numero % 2) {
            echo "Número Impar <br>";
        } else {
            echo "Número Par <br>";
        }
    }

    function contarCaracteres($texto) {
        echo "strlen($texto) <br>";
    }

?>