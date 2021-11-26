<?php

    // Crie um arquivo chamado exercicio6.php; Escreva um script php que leia 6 números nas variáveis Val1, Val2 ,Val3, Val4, Val5 e Val6 calcule sua média na variável média e exiba para o usuário o resultado;

    $valUm = rand(0, 10);
    $valDois = rand(0, 10);
    $valTres = rand(0, 10);
    $valQuatro = rand(0, 10);
    $valCinco = rand(0, 10);
    $valSeis = rand(0, 10);
    $media = ($valUm + $valDois + $valTres + $valQuatro + $valCinco + $valSeis) / 6;
    echo $media;



?>