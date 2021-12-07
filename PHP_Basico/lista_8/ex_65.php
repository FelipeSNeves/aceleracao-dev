<?php

    // Crie Gets e Set’s da classe a seguir. Crie um método construtor que receba NULL, caso o usuário não passe nada por parâmetro. Crie um método __destruct para destruir o objeto e por fim um método __toString que devolva um json com as informações do objeto. Crie uma função chamada insereGerente, capaz de receber um objeto da classe gerente e o transforme em array. Leia cada posição do array e insira a informação de cada posição desse array separada por vírgula. Lembre-se de que se for inserir mais alguma informação deve pular uma linha para organizar as informações. Recupere as informações do arquivo e exiba com var_export.

    class Gerente{
        public $id;
        public $nome;
        public $alocacao;
        public $salario;
        public $quantidadeDeSubordinados;

        public function getId()
        {
            return $this->id;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getAlocacao()
        {
            return $this->alocacao;
        }

        public function getSalario()
        {
            return $this->salario;
        }

        public function getQuantidadeDeSubordinados()
        {
            return $this->quantidadeDeSubordinados;
        }

        public function setId($valor)
        {
            $this->id = $valor;
        }

        public function setNome($valor)
        {
            $this->nome = $valor;
        }

        public function setAlocacao($valor)
        {
            $this->alocacao = $valor;
        }

        public function setSalario($valor)
        {
            $this->salario = $valor;
        }

        public function setQuantidadeDeSubordinados($valor)
        {
            $this->quantidadeDeSubordinados = $valor;
        }

        public function __construct($id = null, $nome = null, $alocacao = null, $salario = null, $quantidadeDeSubordinados = null)
        {
            $this->setId($id);
            $this->setNome($nome);
            $this->setAlocacao($alocacao);
            $this->setSalario($salario);
            $this->setQuantidadeDeSubordinados($quantidadeDeSubordinados);
        }

        public function __destruct()
        {
            // Destruir o objeto
        }

        public function __toString()
        {
            return json_encode(array(
                "id" => $this->getId(),
                "nome" => $this->getNome(),
                "alocacao" => $this->getAlocacao(),
                "salario" => $this->getSalario(),
                "quantidadeDeSubordinados" => $this->getQuantidadeDeSubordinados()
            ));
        }

        public function insereGerente(Gerente $gerente){
            $arquivo = fopen("gerentes.txt", "c+");
            $gerentes = file_get_contents("gerentes.txt");
            $gerentes = json_decode($gerentes, true);
            $gerentes[] = $gerente;
            $objeto = json_encode($gerentes);                        
            fwrite($arquivo, $objeto);
            fclose($arquivo);
            $gerente = (array) $gerente;
            foreach($gerente as $key => $value){                
                echo $value . ", ";
            }
            echo '<br>Gerente gravado!<hr><br>';            
        }

    }



?>