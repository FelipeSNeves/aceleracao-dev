<?php

    // Usando file_get_contents, busque na url https://jsonplaceholder.typicode.com/posts e armazene em uma variável. Depois, exiba o resultado usando var_export.

    $url = file_get_contents("https://jsonplaceholder.typicode.com/posts");
    var_export($url);

?>