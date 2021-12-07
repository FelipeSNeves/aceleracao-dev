<?php

/**
 * Dada as classes a seguir:
 *
 * Escreva uma classe que representa todas as despesas de um indivíduo. Ela mantém um vetor onde podem ser registradas tanto despesas de um dia (DespesaDia), quanto despesas de um mês (DepesaMes). A classe implementa os seguintes métodos:
 *
 *
 */

class DespesaMes
{
    private $mes;
    private $valor;

    public function __construct($mes, $valor)
    {
        $this->mes = $mes;
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getMes()
    {
        return $this->mes;
    }
}

class DespesaDia extends DespesaMes
{
    private $dia;

    public function __construct($dia, $mes, $valor)
    {
        parent::__construct($mes, $valor);
        $this->dia = $dia;
    }

    public function getDia()
    {
        return $this->dia;
    }
}

class DespesasIndividuo
{
    private $cpf;
    private $despesasDia;
    private $despesasMes;

    public function __construct($cpf, $despesas)
    {
        $this->cpf = $cpf;
        foreach ($despesas as $despesa) {
            if ($despesa instanceof DespesaDia) {
                $despesasDia[] = $despesa;
            } elseif ($despesa instanceof DespesaMes) {
                $despesasMes[] = $despesa;
            }
        }
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function totalizaMes($mes)
    {
        $somatorio = 0;

        foreach ($this->despesasMes as $mes) {
            if ($mes->getMes() === $mes) {
                $somatorio += $mes->getValor();
            }
        }

        return new DespesaMes($mes, $somatorio);
    }
}

?>