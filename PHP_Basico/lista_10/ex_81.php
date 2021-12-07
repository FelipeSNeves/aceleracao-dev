<?php 

    class Pessoa {
        private $id;
        private $nome;
        private $cpf;
        private $rg;
        private $endereco;
    } 

    class Aluno extends Pessoa {
        private $matricula;
        private $curso;
    }

    class Atendente extends Pessoa {
        private $numAtendente;
    }

    class Tecnico extends Pessoa {
        private $funcao;
        private $numTecnico;

        public function funcao() {
            return $this->funcao;
        }

        public function numTecnico() {
            return $this->numTecnico;
        }
    }

    class Atendimento {
        private $protocolo;
        private $grupo;
        private $atendente;
        private $tecnico;
        private $aluno;
        private $tipo;
        private $idCategoria;
        private $idItem;

        public function alteraStatusAtendimento() {
            echo "Status de atendimento alterado";
        }

        public function finalizaAtendimento() {
            echo "Atendimento finalizado";
        }

        public function repassaAtendimento() {
            echo "Atendimento passado adiante";
        }
    }

    class TipoServico {
        private $id;
        private $nome;
        private $descricao;
        private $nivel;

        public function verificaPrioridade() {
            return true;
        }

        public function aumentaNivel() {
            $this->nivel++;
            return true;
        }
    }

    class Grupo {
        private $id;
        private $nome;
        private $descricao;
    }

    interface Pagamento {
        public function status();
        public function verificaMeioDePagamento();
        public function mostraQuantidadeParcelas();
        public function aplicaDesconto();
        public function aplicaJuros();
        public function aplicaTaxa();
        public function removeTaxa();
        function atualizaStatus();
        function criaIdentificador($aluno, $hash);
    }

    class Pix implements Pagamento {
        private $id;
        private  $chave;
        private $conta;

        public function status() {/*...*/}

        public function verificaMeioDePagamento() {
            return true;
        }
        
        public function mostraQuantidadeParcelas() {
            return true;
        }
        
        public function aplicaDesconto() {
            return true;
        }
        
        public function aplicaJuros() {
            return true;
        }
        
        public function aplicaTaxa() {
            return true;
        }
        
        public function removeTaxa() {
            return true;
        }
        
        function atualizaStatus() {
            return "Status atualizado";
        }
        
        function criaIdentificador($aluno, $hash) {
            return true;
        }
    }

    class Cartao implements Pagamento {
        private $id;
        private $tipo;
        private $conta;

        public function status() {/*...*/}
        public function verificaMeioDePagamento() {
            return true;
        }
        public function mostraQuantidadeParcelas() {
            return true;
        }
        public function aplicaDesconto() {
            return true;
        }
        public function aplicaJuros() {
            return true;
        }
        public function aplicaTaxa() {
            return true;
        }
        public function removeTaxa() {
            return true;
        }
        function atualizaStatus() {
            return "Status atualizado";
        }
        function criaIdentificador($aluno, $hash) {
            return true;
        }
    }

    class Conta {

        private $id;
        private $agencia;
        private $digito;
        private $conta;
        private $pagamentos;

        public function adicionaPagamento(Pagamento $pagamento) {
            $pagamentos[] = $pagamento;
        }
    }

    class Categoria {
        private $id;
        private $nome;
        private $descricao;

        public function verificaPrioridade() {
            return true;
        }

        public function aumentaNivel() {
            return true;
        }
    }

    class Subcategoria extends Categoria {
        private $id;
        private $categoria;
        private $descricao;

        public function verificaPrioridade() {
            return true;
        }

        public function aumentaNivel() {
            return true;
        }
    }

?>