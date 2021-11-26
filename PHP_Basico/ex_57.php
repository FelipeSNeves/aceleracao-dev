<?php

    // Usando o bloco finally, crie uma função que receberá 1 nome e irá escrever esse nome, caso o nome seja vazio ou nulo, lance uma exception, em seguida implemente uma estrutura de try catch onde dentro dela você vai chamar a função criada por você anteriormente e atribuir um nome em uma das chamadas e em outra chamada atribua um valor nulo ou vazio para forçar o erro. Quando for exibir a informação da exceção no catch dê um retorno usando o formato json como resposta.

    try{
        exibirNome('Felipe');
        exibirNome('');
    }catch(Exception $e) {
        $erros[] = "Mensagem: " . $e->getMessage();
        echo json_encode($erros, true) .  "<br>";
    } finally {
        echo "Finaly Executado";
    }

    function exibirNome($nome)
    {
        if(empty($nome)) {
            throw new Exception('Nome Invalido');
        }

    }




?>