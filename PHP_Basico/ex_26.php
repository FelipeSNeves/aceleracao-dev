<?php

    // Crie 3 variáveis, cada 1 delas receberá um valor aleatório inteiro menor que 100. Crie um laço de repetição com while. Em seguida verifique cada 1 das 3 variáveis e escreva seus valores apenas se o valor for par, caso o valor no momento seja ímpar deve ser feito um incremento +1 no valor da variável. Lembre-se que todas as 3 variáveis precisam ser verificadas e incrementadas caso não sejam pares

    $varUm = rand(0,99); 
    $varDois = rand(0,99); 
    $varTres = rand(0,99); 

    $validarUm = false;
    $validarDois = false;
    $validarTres = false;

    echo "Valor Inicial: valor 01 = $varUm / valor 02 = $varDois / valor 03 = $varTres <br>";

    while(!$validarUm || $validarDois || $validarTres) {

        if(!($varUm % 2)) {
            $validarUm = true;
        } else {
            $varUm++;
        }

        if(!($varDois % 2)) {
            $validarDois = true;
        } else {
            $varDois++;
        }

        if(!($varTres % 2)) {
            $validarTres = true;
        } else {
            $varTres++;
        }

    }

    echo "Valor Final: valor 01 = $varUm / valor 02 = $varDois / valor 03 = $varTres <br>";

?>