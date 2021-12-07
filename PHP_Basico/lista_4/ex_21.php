<?php

    // Crie 5 variáveis e atribua valores aleatórios a elas. Em seguida use a função is_null para verificar em uma estrutura condicional se essa variável é nula, se sim escreva uma mensagem ao usuário “ Essa variável é nula”, caso não seja use a função is_array do PHP para verificar se essa variável é um array, se ela for um array então use var_export para mostrar o valor na tela. Lembre-se de organizar as informações na tela emitindo uma quebra de linha “<br>” para facilitar o entendimento das informações.

    $varUm = rand(0,100);
    $varDois = rand(0,100);
    $varTres = rand(0,100);
    $varQuatro = rand(0,100);
    $varCinco = rand(0,100);

    if(is_null($varUm) || is_null($varDois) || is_null($varTres) || is_null($varQuatro) || is_null($varCinco)) {
        echo "Essa variavel é nula <br>";
    }

    if(is_array($varUm) || is_array($varDois) || is_array($varTres) || is_array($varQuatro) || is_array($varCinco)) {
        var_export($varUm);
        var_export($varDois);
        var_export($varTres);
        var_export($varQuatro);
        var_export($varCinco);
    }

?>