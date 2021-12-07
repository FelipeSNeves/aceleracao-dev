<?php

    // Falando sobre exceções, leia um array de 15 posições e atribua números aleatórios a ele, em seguida crie uma função capaz de verificar se o número é par ou impar, caso seja par retorne true caso seja impar lance uma exceção com a seguinte mensagem: “Número não válido para essa operação , com o código de erro de número 535.

    $numeros = [];

    for($contador = 0; $contador < 15; $contador++) {
        array_push($numeros, rand(0,1000));
    }
    
    try{
        foreach($numeros as $numero){
            echo parImpar($numero) . "<br>";
        }
    }catch(Exception $e){
        echo "Mensagem: " . $e->getMessage() . "<br>";
    }


    function parImpar($numero){
        if($numero % 2 == 0){
            return true;
        }else{
            throw new Exception("Número não válido para essa operação", 535);
        }
    }



?>