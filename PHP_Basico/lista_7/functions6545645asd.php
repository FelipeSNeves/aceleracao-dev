<?php


    function fazerDivisao($dividendo, $divisor) {

        if($divisor) {
            echo "$dividendo / $divisor = " . ($dividendo/$divisor);
            exit;
        }

        echo 'DIVISÃO POR ZERO';

    }


?>