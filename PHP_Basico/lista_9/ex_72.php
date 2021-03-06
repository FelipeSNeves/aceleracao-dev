<?php

    /**
     * Escreva um método que receba três parâmetros:
     *
     * ● um vetor C de objetos da classe Correntista já feita anteriormente,representando os correntistas de um banco;
     * 
     * ● um vetor M de objetos que implementam a interface MovimentoConta representando o movimento de diversos correntistas em um banco;
     * 
     * ● um objeto que implementa a interface OperacoesBanco. O método deve atualizar o saldo dos correntistas do vetor C com os movimentos que estão no vetor M. Observe que cada movimento é referente a apenas um dos correntistas.
     * 
     * Nesta questão basta implementar o método, não é necessária a especificação da classe.
    */

    class Correntista
    {
        private $cpfCliente;
        private $saldo;
    
        public function __construct($cpfCliente, $saldo)
        {
            $this->cpfCliente = $cpfCliente;
            $this->saldo = $saldo;
        }
    
        public function getCPFCliente()
        {
            return $this->saldo;
        }
    
        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }
    }
    
    interface MovimentoConta
    {
        public function getCPFCorrentista();
        public function getValorMovimento();
    }
    
    interface OperacoesBanco
    {
        public function encontraCorrentista($todosCorrentistas, $cpfProcurado);
    }

?>