<?php

    // Crie uma função que receba dois números inteiros, e mostre o resultado da divisão entre eles, caso haja uma divisão por 0, você deve lançar uma exceção dizendo “não é possivel fazer divisão por 0”, juntamente com o código de erro 523.

    try{
        dividirNumeros(rand(0,5),rand(0,5));
    } catch(Exception $e) {
        echo 'Erro ' . $e->getCode() . '- ' . $e->getMessage();
    }

    function dividirNumeros($dividendo, $divisor) {
        if(!$divisor) {
            throw new Exception('Divisão por zero não permitida', 523);
        } 
    }

?>