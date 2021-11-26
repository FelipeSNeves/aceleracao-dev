<?php

    // Leia um array de 15 posições, cada posição deve conter o nome de uma pessoa de sua escolha, para cada pessoa crie um diretório com seu nome ( lembre-se de verificar se o diretório existe e em caso de tentar criar um diretório com o mesmo nome exiba uma mensagem de erro e não crie um novo diretório) e dentro do diretório criado crie um arquivo com a nomenclatura: {nome_candidato).txt.Dentro desse arquivo escreva o nome da pessoa;

    $nomes = [
        "Ana",
        "Antônio",
        "Carlos",
        "Francisca",
        "Francisco",
        "João",
        "José",
        "Luiz",
        "Manoel",
        "Marcos",
        "Maria",
        "Paulo",
        "Pedro",
        "Raimundo",
        "Sebastião"
    ];

    for($contador = 0; $contador < count($nomes); $contador++) {
        if(!is_dir($nomes[$contador])) {
            mkdir("./exe_45/" . $nomes[$contador], 0777, true);
            $arquivo = fopen("./exe_45/" . $nomes[$contador] . "/" . $nomes[$contador] . ".txt", "a");
            fwrite($arquivo, $nomes[$contador]);
            fclose($arquivo);
        }
    }



?>