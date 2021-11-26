<?php

    // Crie um arquivo chamado exercicio11.php. Crie um script capaz de ler um array de nomes com 10 nomes (crie seus próprios nomes). Em seguida imprima esses nomes usando for;

    $nomes = [
        "Miguel",
        "Arthur",
        "Heitor",
        "Helena",
        "Alice",
        "Theo",
        "Davi",
        "Laura",
        "Gabriel",
        "Gael"
    ];

    for($contador = 0; $contador <= count($nomes); $contador++) {
        echo "$nomes[$contador] <br>";
    }



?>