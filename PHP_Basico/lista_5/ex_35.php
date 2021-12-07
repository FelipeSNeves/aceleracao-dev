<html>
<table border="1">
    <tr>
        <td>Nome</td>
        <td>CPF</td>
        <td>Dependentes</td>
        <td>Renda Mensal</td>
        <td>Desconto INSS</td>
        <td>Sálario Liq.</td>
    </tr>
    <?php calcularDesconto(); ?>
</table>
</html>

<?php

    function calcularDesconto(){

        // Crie um script php que tenha uma função para  calcular o  imposto de  renda de 3 contribuintes, considerando que os dados de cada contribuinte ( nome, número de CPF, número de dependentes  e renda mensal) crie as variáveis necessárias.  Para  cada contribuinte  será  feito  um desconto de 5% do salário mínimo por dependente. Os valores para cálculo do imposto são:

        $funcionarios = array(
            
            array(
                "nome" => "Felipe",
                "cpf" => "12332198215",
                "dependentes" => "1",
                "rendaMensal" => "1000.00",
                "descontoINSS" => ""
            ),

            array(
                "nome" => "Geraldo",
                "cpf" => "93216532109",
                "dependentes" => "4",
                "rendaMensal" => "2500.00",
                "descontoINSS" => ""
            ),

            array(
                "nome" => "Amanda",
                "cpf" => "20159219204",
                "dependentes" => "2",
                "rendaMensal" => "5000.00",
                "descontoINSS" => ""
            ),
        
        );

        $salarioMinimo = 1000.00;
        $desconto = 0;

        for($contador = 0; $contador < count($funcionarios); $contador++) {
            
            if($funcionarios[$contador]['rendaMensal'] < ($salarioMinimo*2)) {
                $desconto = ($salarioMinimo * 0.00) * $funcionarios[$contador]['dependentes'];
                $funcionarios[$contador]['descontoINSS'] = $desconto;
            }

            if($funcionarios[$contador]['rendaMensal'] >= ($salarioMinimo*2) && $funcionarios[$contador]['rendaMensal'] < ($salarioMinimo*3)) {
                $desconto = ($salarioMinimo * 0.05) * $funcionarios[$contador]['dependentes'];
                $funcionarios[$contador]['descontoINSS'] = $desconto;
            }

            if($funcionarios[$contador]['rendaMensal'] >= ($salarioMinimo*3) && $funcionarios[$contador]['rendaMensal'] <= ($salarioMinimo*5)) {
                $desconto = ($salarioMinimo * 0.10) * $funcionarios[$contador]['dependentes'];
                $funcionarios[$contador]['descontoINSS'] = $desconto;
            }

            echo 
                "<tr>" .
                    "<td>" . $funcionarios[$contador]['nome'] . "</td>" .
                    "<td>" . $funcionarios[$contador]['cpf'] . "</td>" .
                    "<td>" . $funcionarios[$contador]['dependentes'] . "</td>" .
                    "<td> R$ " . $funcionarios[$contador]['rendaMensal'] . "</td>" .
                    "<td>" . $funcionarios[$contador]['descontoINSS'] . "</td>" .
                    "<td> R$ " . ($funcionarios[$contador]['rendaMensal'] - $funcionarios[$contador]['descontoINSS']) . "</td>" .
                "</tr>";

        }
    }


?>