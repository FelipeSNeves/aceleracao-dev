<?php


    $nota = new Nota(1, 'Cadeira Gamer', 'Cadeira Gamer - 100kg', 1, 1200.00, 0.00);
    echo $nota->calcularFatura();

    // Crie uma classe chamada Nota que possa ser utilizada por uma rede de lojas de Tecnologia, onde o objeto gerado a partir dessa classe vai representar uma fatura de um item vendido na loja. Sendo assim, uma fatura deve incluir as seguintes informações como atributos
    class Nota
    {

        // Crie atributos de forma privada
        
        private $idItem;
        private $nome;
        private $descricaoItem;
        private $quantidadeComprada;
        private $precoVenda;
        private $desconto;

        // Sua classe deve ter um construtor que inicialize os atributos. Caso não se tenha quantidade desse item, a quantidade deve ser configurada como 0. 

        public function __construct($idItem, $nome, $descricaoItem, $quantidadeComprada = 0, $precoVenda, $desconto)
        {
            $this->idItem = $idItem;
            $this->nome = $nome;
            $this->setDescricaoItem($descricaoItem);
            $this->quantidadeComprada = $quantidadeComprada;
            $this->setPrecoVenda($precoVenda);
            $this->desconto = $desconto;
        }

        // forneça um método set apenas para preço de venda e descrição do item

        public function setDescricaoItem($valor)
        {
            $this->descricaoItem = $valor;
        }

        public function setPrecoVenda($valor)
        {
            $this->precoVenda = $valor;
        }

        // um método get para cada variável de instância.

        public function getIdItem()
        {
            return $this->idItem;
        }
        
        public function getNome()
        {
            return $this->nome;
        }
        
        public function getDescricaoItem()
        {
            return $this->descricao;
        }
        
        public function getQuantidadeComprada()
        {
            return $this->quantidadeComprada;
        }
        
        public function getPrecoVenda()
        {
            return $this->precoVenda;
        }
        
        public function getDesconto()
        {
            return $this->desconto;
        }

        // Crie também dentro dessa classe um método calcula fatura, sendo ele responsável por calcular o valor da fatura (isso é, multiplicar a quantidade pelo preço por item) e depois retorna o valor. 

        public function calcularFatura()
        {
            return $this->getQuantidadeComprada() * $this->getPrecoVenda();
        }
    }
?>