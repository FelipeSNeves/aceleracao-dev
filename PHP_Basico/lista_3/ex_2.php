<?php

    // Crie um arquivo chamado exercicio2.php, dentro dele crie 3 variáveis que vão receber 3 arrays diferentes cada 1; Na tabela abaixo consta o nome e o indice de cada array respectivo

    $curso = array(
        "PHP",
        "Java",
        "Python"
    );

    foreach($curso as $indice => $valor) {
        echo "$indice => $valor <br>";
    }

    echo "==================================== <br>";

    $pessoa = array(
        "João",
        "Pedro",
        "Clara"
    );

    foreach($pessoa as $indice => $valor) {
        echo "$indice => $valor <br>";
    }

    echo "==================================== <br>";

    $loja = array(
        "Centro",
        "Zona Sul",
        "Zona Oeste"
    );

    foreach($loja as $indice => $valor) {
        echo "$indice => $valor <br>";
    }

    echo "==================================== <br>";




?>