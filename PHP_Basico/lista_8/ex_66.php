<?php

    // Crie uma classe chamada Pessoa com os atributos [nome, CPF, endereco, nomepai, nomemae, rg, serialdeidentificacao], crie também aqui dentro Get’s e Set’s para os atributos necessários, lembre-se de criar um método construtor. Em seguida crie uma função toString() que retorna um JSON com dados do objeto. Crie 2 objetos com informações distintas e apresente as informações dos objetos pela função toString com var_dump.

    class Pessoa
    {
        private $nome;
        private $cpf;
        private $endereco;
        private $nomepai;
        private $nomemae;
        private $rg;
        private $serialDeIdentificacao;

        public function getNome()
        {
            return $this->nome;
        }

        public function getCpf()
        {
            return $this->cpf;
        }

        public function getEndereco()
        {
            return $this->endereco;
        }

        public function getNomepai()
        {
            return $this->nomepai;
        }

        public function getNomemae()
        {
            return $this->nomemae;
        }

        public function getRg()
        {
            return $this->rg;
        }

        public function getSerialDeIdentificacao()
        {
            return $this->serialDeIdentificacao;
        }

        public function setNome($valor)
        {
            $this->nome = $valor;
        }

        public function setCpf($valor)
        {
            $this->cpf = $valor;
        }

        public function setEndereco($valor)
        {
            $this->endereco = $valor;
        }

        public function setNomepai($valor)
        {
            $this->nomepai = $valor;
        }

        public function setNomemae($valor)
        {
            $this->nomemae = $valor;
        }

        public function setRg($valor)
        {
            $this->rg = $valor;
        }

        public function setSerialDeIdentificacao($valor)
        {
            $this->serialDeIdentificacao = $valor;
        }

        public function __construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao) 
        {
            $this->setNome($nome);
            $this->setCpf($cpf);
            $this->setEndereco($endereco);
            $this->setNomepai($nomepai);
            $this->setNomemae($nomemae);
            $this->setRg($rg);
            $this->setSerialdeidentificacao($serialdeidentificacao);
        }
    
        public function __toString() 
        {
            return json_encode(array(
                "nome" => $this->getNome(),
                "CPF" => $this->getCpf(),
                "endereco" => $this->getEndereco(),
                "nomepai" => $this->getNomepai(),
                "nomemae" => $this->getNomemae(),
                "rg" => $this->getRg(),
                "serialdeidentificacao" => $this->getSerialdeidentificacao()
            ));
        }    
    }
    
    $pessoa1 = new Pessoa("Felipe", "123.456.789-10", "Rua Arara", "Luciano", "Andreia", "123456789", "123456789");

    $pessoa2 = new Pessoa("Jao", "987.765.432-10", "Rua Daniel da Silva", "Douglas", "Maria", "987654321", "987654321");

    var_dump($pessoa1);

    var_dump($pessoa2);

?>