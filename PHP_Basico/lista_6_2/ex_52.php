<?php

    // Crie 2 arrays 20 posições cada, dentro de cada um deles atribua números inteiros aleatórios. Em seguida, pegando o valor correspondente a posição de ambos os arrays, crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. Se o valor da soma for negativo o método deverá retornar o valor 0. Em seguida crie um arquivo chamado arrays.txt e armazene os dois números inteiros passados na operação, separados por virgula juntamente com o valor retornado pela função.

    $arrayUm = array();
    $arrayDois = array();

    for($contador = 0; $contador < 20; $contador++) {
        array_push($arrayUm, rand(-1000,1000));
        array_push($arrayDois, rand(1,100));
    }

    echo somarValores($arrayUm[rand(0, count($arrayUm))], $arrayDois[rand(0, count($arrayDois))]);

    function somarValores($numeroUm, $numeroDois) {
        
        $total = ($numeroUm) + ($numeroDois); 
        $retorno = $total < 0 ? 0 : $total;

        $arquivo = fopen('arrays.txt', 'a');
        fwrite($arquivo, $numeroUm . ", " . $numeroDois . ", " . $retorno . "\r\n");
        fclose($arquivo);
        
        return $retorno;
    }

?>