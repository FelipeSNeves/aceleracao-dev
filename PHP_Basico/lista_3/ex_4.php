<?php

    // Crie um arquivo chamado exercicio4.php; Depois faça um script que leia 2 arrays (você pode definir valores e índices de sua escolha) e escreva seus valores e índices usando o foreach, e em seguida use a função merge para unificar os dois arrays. Mostre o resultado do merge com var_export;

    $pessoas = [
        "nome" => "Felipe",
        "dataNascimento" => "1994-10-27",
        "residente" => "Guarulhos"
    ];

    $profissoes = [
        "titulo" => "Técnico de Desenvolvimento",
        "salario" => "1700"
    ];
    
    $arrayMerge = array_merge($pessoas, $profissoes);

    foreach($pessoas as $indice => $valor) {
        echo "$indice => $valor <br>"; 
    }

    echo "====================================== <br>";

    foreach($profissoes as $indice => $valor) {
        echo "$indice => $valor <br>"; 
    }

    echo "====================================== <br>";


    var_export($arrayMerge);



?>