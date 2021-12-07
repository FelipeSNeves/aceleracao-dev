<?php

    // Dado o conjunto de urls (https://random-data-api.com/api/stripe/random_stripe, https://random-data-api.com/api/stripe/random_stripe, https://random-data-api.com/api/app/random_app, https://random-data-api.com/api/beer/random_beer, https://random-data-api.com/api/commerce/random_commerce, https://random-data-api.com/api/device/random_device, https://random-data-api.com/api/subscription/random_subscription). Crie um array com todas as urls do conjunto mencionado anteriormente, em seguida faça uma requisição para cada uma das urls usando o file_get_contents. Crie um arquivo chamado api.txt, dentro dele adicione o conteúdo de cada uma das requisições feitas com os dados convertidos em array, lembre-se de abrir e fechar o arquivo e escrever no final dele a cada nova requisição, preservando o conteúdo da requisição anterior. Use “\r\n” para realizar a organização das informações. Em seguida leia o arquivo api.txt e exiba o seus respectivos valores convertidos para json.

    $arrayURL = array(
        "https://random-data-api.com/api/stripe/random_stripe", 
        "https://random-data-api.com/api/stripe/random_stripe", 
        "https://random-data-api.com/api/app/random_app", 
        "https://random-data-api.com/api/beer/random_beer", 
        "https://random-data-api.com/api/commerce/random_commerce", 
        "https://random-data-api.com/api/device/random_device", 
        "https://random-data-api.com/api/subscription/random_subscription"
    );

    foreach($arrayURL as $url) {
        
        $consulta = file_get_contents($url);
            
        $arquivo = fopen("api.txt", "a");
        fwrite($arquivo, $consulta . "\r\n \r\n");
        fclose($arquivo);
    }

    $arquivo = file("api.txt");

    $finalArray = array();
    foreach ($arquivo as $linha) {
        $json = json_decode($linha, true);
        array_push($finalArray, $json);
    }
    
    var_export($finalArray);






?>