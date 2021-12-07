<?php

    // Crie um arquivo chamado exercicio10.php. Crie um script php capaz de ler um array de números (0,1,2,3,4,5,6,7,8,9) e imprima apenas os que forem pares dentro de um foreach, mostrando seu índice e valor;

    $arrayNumeros = [0,1,2,3,4,5,6,7,8,9];

    foreach($arrayNumeros as $item => $valor) {
        if(!($valor % 2)) {
            echo "$item => $valor <br>";
        }
    }

?>