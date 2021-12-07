<?php

    /** 

        * Você foi contratado para construir um cardápio online para uma conveniência de fast-food em uma grande rede de postos de combustível. Para isso seu cliente te forneceu uma série de requisitos:Programa de Aceleração para Programadores em PHP 

        * 1. Nessa lanchonete você terá apenas 3 tipos de produtos: salgados, acompanhamentos e refrigerantes.

        * 2. Cada categoria (ou seja cada array de produto) pode ter no mínimo 3 itens e no máximo 6. Utilize estruturas condicionais e combinados com laços de repetição para fazer a verificação. (Consulte a documentação do PHP);

        * Algumas regras adicionais e muito importantes:

        * ➔ Você precisa construir esse cardápio usando arrays em PHP (não é necessário usar banco de dados).

        * ➔ Você precisa separar funções em um novo arquivo chamdo cardapioFunctions.php.

        * Sua missão é construir esse cardápio acima usando todo o conhecimento obtido até o momento no curso (arrays, interpolação, functions, variáveis, include, require, etc). Após montar toda a estrutura do cardápio obedecendo a quantidade de mínima e máxima de cada uma das categorias, seu script deve ser capaz de identificar a quantidade de cada 1 das categorias se estão entre o mínimo e máximo permitido, caso não esteja forneça o feedback ao usuário por meio de mensagens como por exemplo “A categoria salgados não obedece a quantidade mínima de itens, cadastre mais itens”. Por fim mostre o resultado de cada uma das categorias, exibindo seu índice e valor. (Lembre-se de fazer a quebra de linhas para manter a organização das informações).
    */

    require_once 'cardapioFunctions.php';

    $salgados = ['coxinha de frango', 'kibe', 'bolinha de queijo'];

    $acompanhamentos = ['katchup', 'mostarda', 'maionese'];

    $refrigerantes = ['Pepsi', 'Guaraná', 'Coca'];

    validarQuantidade($salgados, $acompanhamentos, $refrigerantes);





?>