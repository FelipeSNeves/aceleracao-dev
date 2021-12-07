<?php

    // Faça um script PHP que crie um arquivo txt em disco (lembre-se de verificar as permissões de escrita e gravação), com o nome “dados.txt”, e escreva neste arquivo de 1 até 700, escrevendo apenas os números pares, colocando um número em cada linha.


    for($contador = 1; $contador <= 700; $contador++) {
        $arquivo = fopen("dados.txt", "a");
        $texto = $contador . "\n";
        fwrite($arquivo, $texto);
        fclose($arquivo);
    }



?>