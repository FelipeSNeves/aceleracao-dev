<?php

    // Crie um arquivo chamado exercicio12.php; Escreva um script php que leia 16 números de um array(crie números aleatórios no array) calcule sua média na variável média e exiba para o usuário o resultado do array com var_export e em seguida mostre o resultado da média com o comando print;

    $numeros = [];
    $soma = 0;
    
    for($contador = 0; $contador < 16; $contador++) {
        array_push($numeros, rand(0,100));
        $soma += $numeros[$contador]; 
    }

    $media = $soma / count($numeros);
    
    var_export($media);
    
    echo "<br> ====================== <br>";

    print($media);


?>