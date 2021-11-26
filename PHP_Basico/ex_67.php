<?php

    // Crie uma classe chamada Atendente com os atributos [id, funcao, horarioentrada, horariosaida] e que herda da classe Pessoa criada anteriormente. Em seguida crie um construtor completo capaz de acessar o construtor da classe herdada. crie também aqui dentro Get’s e Set’s para os atributos necessários. Em seguida crie uma função toString() que retorna um JSON com dados do objeto. Crie 1 objeto com informações distintas e apresente as informações dos objetos pela função toString com var_dump.

    require_once('ex_66.php');

    class Atendente extends Pessoa{
        private $id;
        private $funcao;
        private $horarioentrada;
        private $horariosaida;

        public function __construct($nome, $CPF, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao, $id, $funcao, $horarioentrada, $horariosaida){
            parent::__construct($nome, $CPF, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
            $this->id = $id;
            $this->funcao = $funcao;
            $this->horarioentrada = $horarioentrada;
            $this->horariosaida = $horariosaida;
        }

        public function __destruct(){
            // echo "<p>Objeto Atendente destruido</p>";
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
                "horarioentrada" => $this->horarioentrada,
                "horariosaida" => $this->horariosaida
            ));
        }
    }

    $atendente1 = new Atendente("Felipe", "123.456.789-00", "Rua A", "Luciano", "Andreia", "123.456.789-00", "1234567890123", "123", "Atendente", "08:30", "17:30");
    
    $atendente2 = new Atendente("Jao", "987.654.321-00", "Rua B", "João", "Maria", "987.654.321-00", "9876543210987", "456", "Atendente", "08:00", "18:00");

    var_dump($atendente1);
  
    var_dump($atendente2);


?>