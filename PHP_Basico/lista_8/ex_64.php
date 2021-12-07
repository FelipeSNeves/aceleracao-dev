<?php


    $funcionario = new Funcionarios();
    $funcionario->calculaSalario(22, 100);
    $funcionario->calculaSalarioMaisGratificacao(15, "Dev");

    interface Servicos
    {
        public function calculaSalario($diasTrabalhados, $cargo);

        public function calculaSalarioMaisGratificacao($diasTrabalhados, $valorGratificacao);

    }

    class Funcionarios implements Servicos 
    {
        private $salarioPadraoA = 6500.00;
        private $salarioPadraoB = 4970.00;
        private $valorDiaTrabalho;

        // A função calculaSalario deve pegar os dias trabalhados , e multiplicar por uma variável local que contenha o valor do dia trabalhado. Para obter essa informação use uma variável local que contenha o salário padrão com o valor de R$6.500 e outra variável que receba o valor do salário dividido por 30 dias, obtendo assim o valor recebido por dia em 1 mês de serviço (Nesse modelo a empresa paga os sábados e domingos). Caso o trabalhador tenha trabalhado 15 dias ou mais imprima uma mensagem: Salário completo e logo abaixo imprima o valor que o trabalhador recebeu por dia. Caso tenha trabalhado menos que 15 dias imprima a mensagem: “Salário com desconto” e retire 30% do valor recebido em cada dia, imprima a quantidade recebida por dia.

        public function calculaSalario($diasTrabalhados, $cargo)
        {
            $this->valorDiaTrabalho = $this->salarioPadraoA / 30;
            $salario = $diasTrabalhados * $this->valorDiaTrabalho;

            if($diasTrabalhados >= 15) {
                return "Salário completo - Salario / dia = $this->valorDiaTrabalho";
            }

            return "Salário com desconto - Salario / dia = " . ($this->valorDiaTrabalho * 0.70);

            
        }
        
        // A função calculaSalarioMaisGratificação deve pegar os dias trabalhados , e multiplicar por uma variável local que contenha o valor do dia trabalhado. Para obter essa informação use uma variável local que contenha o salário padrão com o valor de R$4.970, 1 variável que receba o valor do salário dividido por 30 dias, obtendo assim o valor recebido por dia em 1 mês de serviço (Nesse modelo a empresa paga os sábados e domingos) e por fim 1 variável que contenha um número inteiro que represente uma porcentagem ( ex: $porcentagem = 10 (10%) ). Caso o trabalhador tenha trabalhado 9 dias imprima uma mensagem: Salário completo + 20% e logo abaixo imprima o valor que o trabalhador recebeu por dia 20% somado ao seu dia. Caso tenha trabalhado de 10 a 15 dias imprima a mensagem: “Salário Completo” e some 50% do valor do salário padrão ao valor do salário padrão, imprima a quantidade recebida por dia.

        public function calculaSalarioMaisGratificacao($diasTrabalhados, $valorGratificacao)
        {
            $this->valorDiaTrabalho = $this->salarioPadraoB / 30;
            $salario = $diasTrabalhados * $this->valorDiaTrabalho;
            $porcentagem = 0;

            if($diasTrabalhados == 9) {
                $porcentagem = 20;
                return "Salário completo + 20%. Valor / dia = " . ($this->valorDiaTrabalho * ($porcentagem * 1.20));
            }

            if($diasTrabalhados >= 10 && $diasTrabalhados <= 15) {
                $porcentagem = 50;
                return "Salário completo + 20%. Valor / dia = " . ($this->valorDiaTrabalho * ($porcentagem  * 1.50));
            }
        }     
    }


?>