<?php

    // Crie um arquivo chamado exercicio8.php; Crie um script php capaz de ler um número e verificar se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".

    $numero = rand(-10, 10);

    if($numero < 0) {
        echo "$numero = NÚMERO NEGATIVO";
    }elseif($numero > 0) {
        echo "$numero = NÚMERO POSITIVO";
    }else {
        echo "$numero = IGUAL A ZERO";
    }

?>