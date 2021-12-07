<?php

    // Usando a API do IBGE (https://servicodados.ibge.gov.br/api/docs/localidades),busque por uma url que traga os resultados de todos os distritos do brasil, faça isso usando o file_get_contents, depois transforme ele em um objeto StdClass. Exiba o resultado usando var_export.

    $json = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/distritos");
    $arrayRetorno = json_decode($json);
    var_export($arrayRetorno);



?>