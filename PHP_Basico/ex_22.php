<?php

    // Crie 5 arrays de valores inteiros, depois faça percorra todas as posições deles com o foreach e escreva os valores e índices de cada posição. Em seguida use o var_export para mostrar a estrutura de cada 1 dos 5 arrays.

    $arrayUm = [];
    $arrayDois = [];
    $arrayTres = [];
    $arrayQuatro = [];
    $arrayCinco = [];

    for($contador = 0; $contador < 5; $contador++) {
        array_push($arrayUm, rand(0,10));
        array_push($arrayDois, rand(0,10));
        array_push($arrayTres, rand(0,10));
        array_push($arrayQuatro, rand(0,10));
        array_push($arrayCinco, rand(0,10));
    };
    
    echo "Array Um <br>";
    foreach($arrayUm as $indice => $valor) {
        echo "$indice => $valor <br>";
    }

    var_export($arrayUm);

    echo "<br> =============== <br>";
    echo "Array Dois <br>";
    foreach($arrayDois as $indice => $valor) {
        echo "$indice => $valor <br>";
    }

    var_export($arrayDois);

    echo "<br> =============== <br>";
    echo "Array Tres <br>";
    foreach($arrayTres as $indice => $valor) {
        echo "$indice => $valor <br>";
    }

    var_export($arrayTres);

    echo "<br> =============== <br>";
    echo "Array Quatro <br>";
    foreach($arrayQuatro as $indice => $valor) {
        echo "$indice => $valor <br>";
    }

    var_export($arrayQuatro);

    echo "<br> =============== <br>";
    echo "Array Cinco <br>";
    foreach($arrayCinco as $indice => $valor) {
        echo "$indice => $valor <br>";
    }

    var_export($arrayCinco);

?>