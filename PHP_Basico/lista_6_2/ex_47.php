<?php

    // Crie um script capaz de gerar um arquivo chamado cartao.txt, dentro dele grave as informações consumidas da url usando o comando get_file_contents (https://random-data-api.com/api/business_credit_card/random_card), grave tudo com o formato de array dentro do arquivo. Em seguida leia o arquivo e transforme novamente a informação em JSON. Depois com o json convertido exiba na tela todas as informações usando var_export.

    $url = "https://random-data-api.com/api/business_credit_card/random_card";
    $json = file_get_contents($url);
    
    $arquivo = fopen("cartao.txt", "w");
    fwrite($arquivo, $json);
    fclose($arquivo);
    
    $arquivo = fopen("cartao.txt", "r");
    $conteudo = fread($arquivo, filesize("cartao.txt"));
    fclose($arquivo);
    
    $array = json_decode($conteudo, true);
    $jsonData = json_encode($array);
    var_export($jsonData);

?>