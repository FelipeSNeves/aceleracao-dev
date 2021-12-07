<?php

    // Usando o file_get_contents, busque o JSON da url (https://rickandmortyapi.com/api), após consumir a API a transforme esse json em um array. Após isso, verifique usando funções nativas do PHP se a variável que você criou está vazia, caso sim escreva “Você não pode continuar”, caso não esteja crie uma nova estrutura condicional e verifique qual se essa variável é um array. Caso seja, escreva a estrutura da variável usando var_dump, se não for um array escreva uma mensagem informando o usuário que o tipo de dado é diferente de array.


    $consulta = file_get_contents("https://rickandmortyapi.com/api");
    $jsonRetorno = json_decode($consulta, true);

    if(empty($jsonRetorno)) {
        echo "Você não pode continuar";
    } elseif(is_array($jsonRetorno)) {
        var_dump($jsonRetorno);
    } else {
        echo 'o tipo de dado é diferente de array.';
    }



?>