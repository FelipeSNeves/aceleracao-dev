<?php

    // Crie um arquivo chamado exercicio9.php; Crie um script php capaz de ler uma variavel de entrada com um número, e exiba a tabuada de 0 a 10 de acordo com o número da variavel, ex: Entrada = 4 | Saída = 4 X 0 = 0...4 X 10 = 40.

    $numero = rand(1,10);

    for($multiplicador = 0; $multiplicador <= 10; $multiplicador++) {
        $tabuada = $numero*$multiplicador;
        echo "$numero * $multiplicador = $tabuada <br>";
    }

?>