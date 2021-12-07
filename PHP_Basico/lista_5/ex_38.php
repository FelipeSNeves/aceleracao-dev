<?php

    // Crie  um PHP com dois  valores ,  inicial  e final,  de temperaturas  em  graus Fahrenheit (Esse valor deverá ser um float).  Seu script deve conseguir apresentar, um valor em cada linha contendo  a conversão das temperaturas para graus Celsius.

    $valorInicial = 1.00;
    $valorFinal = 5.75;

    while($valorInicial <= $valorFinal) {
            echo  number_format($valorInicial,2) . " ºF = " . number_format(($valorInicial - 32) / 1.8, 2) . " ºC <br>";
        $valorInicial += 0.01;
    }

?>