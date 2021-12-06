<?php

    // Um banco possui um sistema onde é definida a seguinte classe que representa um correntista e o saldo de sua conta bancária:

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
            return $this->cpfCliente;
        }

        public function getSaldo()
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