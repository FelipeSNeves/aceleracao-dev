<?php

    // Usando a API do IBGE (https://servicodados.ibge.gov.br/api/docs/localidades), busque por uma url que traga os resultados de mesorregiões do Brasil, faça isso usando o file_get_contents, depois transforme ele em um array. Exiba o resultado usando var_export

    $json = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes/1602/distritos");
    $arrayJson = json_decode($json, true);
    var_export($arrayJson);


?>