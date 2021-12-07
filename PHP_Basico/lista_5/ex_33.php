<?php

    /** 
        *    Crie um script php, leia um array onde contenha 12 preços aleatórios do tipo float, depois leia cada uma das posições e calcule o que deve ser pago por um produto, considerando o preço original de etiqueta (o valor da posição do array) e calcule o preço final com base em cada uma das condições de pagamento disponíveis. Utilize os códigos da tabela a seguir para efetuar o cálculo adequado para cada condição de pagamento. Lembre-se de usar a interpolação para dar um feedback preciso ao usuário. 
            
        *    Ex: “Forma de pagamento escolhida: Cartão, valor original R$: $variavel - Valor Final : $variavel”.
    */
    
    // CONSTANTES

    // DINHEIRO_OU_CHEQUE - 0.90;
    // CREDITO_A_VISTA - 0.95;
    // CREDITO_2_VEZES - 1;
    // CREDITO_3_VEZES - 1.10;

    $formaPagamento = "DINHEIRO_OU_CHEQUE";

    $porcentagemFormaPagamento;

    if($formaPagamento === 'DINHEIRO_OU_CHEQUE') {
        $porcentagemFormaPagamento = 0.90;
    }

    if($formaPagamento === 'CREDITO_A_VISTA') {
        $porcentagemFormaPagamento = 0.95;
    }

    if($formaPagamento === 'CREDITO_2_VEZES') {
        $porcentagemFormaPagamento = 1;
    }

    if($formaPagamento === 'CREDITO_3_VEZES') {
        $porcentagemFormaPagamento = 1.10;
    }

    $precoFinal = [];

    $precos = [];
    
    echo "Valor Original. - Forma de Pagamento - Valor Final. <br>";
    for($contador = 0; $contador < 12; $contador++) {
        array_push($precos, number_format((1+lcg_value()*(abs(100-1))), 2));
        echo 
            "R$ $precos[$contador] - $formaPagamento - R$ " . number_format($precos[$contador]*$porcentagemFormaPagamento, 2) . "<br>"
        ;
    }

?>