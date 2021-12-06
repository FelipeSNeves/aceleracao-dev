<?php

//  O método orcamentoGastosAnimal retorna o orçamento para gastos de um animal no Zoológico. O zoológico deseja saber quais de seus animais têm a “vacina W” prevista no seu orçamento. Escreva um método que receba como parâmetro um vetor de objetos que implementam a interface AnimalOrcamento representando todos os animais do zoológico e seus respectivos orçamentos. O método deve retornar um outro vetor de objetos que implementam a interface AnimalOrcamento apenas com aqueles animais que possuem um subitem com histórico “vacina W” prevista no seu orçamento. Nesta questão basta implementar o método, não é necessária a especificação da classe.

interface AnimalOrcamento extends Animal
{
    public function orcamentoGastosAnimal($animais);
}

class Cachorro implements AnimalOrcamento
{
    private $nomeEspecie;
    private $nomeAnimal;

    public function __construct($nomeEspecie, $nomeAnimal)
    {
        $this->nomeEspecie = $nomeEspecie;
        $this->nomeAnimal = $nomeAnimal;
    }

    function getNomeEspecie()
    {
        return $this->nomeEspecie;
    }

    function getNomeAnimal()
    {
        return $this->nomeAnimal;
    }

    public function orcamentoGastosAnimal($animais)
    {
        foreach ($animais as $animal) {
            if ($animal instanceof ItemOrcamentoComplexo) {
                if ($animal->getHistorico() === 'vacina W') {
                    return $animal;
                }
            }
        }
    }
}

?>
