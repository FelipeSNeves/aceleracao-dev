<?php

    // Crie uma classe chamada Secretaria com os atributos [id, funcao, horatrabalhada, horasexteras] e que herda da classe Pessoa criada anteriormente. Em seguida crie um construtor completo capaz de acessar o construtor da classe herdada. crie também aqui dentro Get’s e Set’s para os atributos necessários. Em seguida crie uma função toString() que retorna um JSON com dados do objeto. Crie 1 objeto com informações distintas e apresente as informações dos objetos pela função toString com var_dump.

    require_once('ex_66.php');

    class Secretaria extends Pessoa{

        private $id;
        private $funcao;
        private $horatrabalhada;
        private $horasextras;

        public function __construct($nome, $CPF, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao, $id, $funcao, $horatrabalhada, $horasextras){
            parent::__construct($nome, $CPF, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
            $this->id = $id;
            $this->funcao = $funcao;
            $this->horatrabalhada = $horatrabalhada;
            $this->horasextras = $horasextras;
        }

        public function __toString(){
            return json_encode(array(
                "nome" => $this->nome,
                "CPF" => $this->CPF,
                "endereco" => $this->endereco,
                "nomepai" => $this->nomepai,
                "nomemae" => $this->nomemae,
                "rg" => $this->rg,
                "serialdeidentificacao" => $this->serialdeidentificacao,
                "id" => $this->id,
                "funcao" => $this->funcao,
                "horatrabalhada" => $this->horatrabalhada,
                "horasextras" => $this->horasextras
            ));
        }
    }

    $secretaria1 = new Secretaria("Felipe", "123.456.789-00", "Rua A", "Luciano", "Andreia", "123456789", "123456789", "123", "Secretaria", "6", "2");
    
    $secretaria2 = new Secretaria("Andreia", "987.654.321-00", "Rua B", "Geraldo", "Maria", "987654321", "987654321", "456", "Secretaria", "8", "2");
    
    var_dump($secretaria1);
    
    var_dump($secretaria2);

?>