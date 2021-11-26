<?php

    // Verificando quais são os modos de exibição de erros use o código abaixo que produz um erro. Com base nesse erro oculte ele usando as funções de error_reporting no PHP.

    error_reporting(E_ALL & E_USER_WARNING);
    $idade = $_GET[‘idade’];
    echo $idade;

?>