<?php

    // Usando o arquivo paises.txt criado no exercicios anterior, crie um script PHP que crie um arquivo csv, com o nome “lista.csv”e escreva dentro dele os dados do do arquivo paises.txt com o delimitador “,”separando as informações.

    $arquivoOriginal = file_get_contents("paises.txt");
    $converterJson = json_decode($arquivoOriginal, true);
    $cabecalho = array();

    foreach($converterJson[0] as $chave => $valor) {
        array_push($cabecalho, $chave);
    }

    $arquivoCSV = fopen("lista.csv", "w+");
    fwrite($arquivoCSV, implode(",", $cabecalho) . "\r\n");

    $dados = array();
    foreach($converterJson as $valor) {
        foreach($valor as $v) {
            array_push($dados, $v);
        }
        fwrite($arquivoCSV, implode(",", $dados));
    }

    fclose($arquivoCSV);

?>