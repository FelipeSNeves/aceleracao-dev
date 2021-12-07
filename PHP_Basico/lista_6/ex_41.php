<?php

    //  Crie um script PHP que leia o json da url (https://servicodados.ibge.gov.br/api/v1/localidades/paises), grave o conteudo desse json em um arquivo txt chamado “paises.txt

    $conteudo = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/paises");
    $arquivo = fopen("paises.txt", "a");
    fwrite($arquivo, $conteudo);
    fclose($arquivo);

?>