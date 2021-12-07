<?php

    // Dado o array abaixo, escreva um programa que mostre o nome, idade e o sexo (F ou H) de cada um dos individuos presente no arra. Em seguida , crie um array com os individuos do sexo masculino e outro com os do sexo feminino. Oobservação: separe a letra após a “,” onde consta (m ou f) que indica respectivamente qual o sexo do indivíduo, use esse valor para definir uma condicional e seprar os arrays, lembre-se de usar a função de separação);


    $clientes=array(
        "Joaquim"=>"28,m",
        "Maria"=>"41,f",
        "Pedro"=>"18,m",
        "JoanaSilva"=>"58,f",
        "JoãoLopes"=>"21,m", 
        "Joana" => "15,f", 
        "Fernanda" => "25,f"
    );

    $nomesMasculinos = array();
    $nomesFemininos = array();

    foreach($clientes as $chaves => $valores) {
        echo "$chaves => $valores <br>";
        
        if(end(explode(',', $valores)) === 'm') {
            array_push($nomesMasculinos, $chaves);
        } else {
            array_push($nomesFemininos, $chaves);
        }        
    }

    echo '<br> Nomes Masculinos:';
    print_r($nomesMasculinos);

    echo '<br> Nomes Femininos:';
    print_r($nomesFemininos);



?>