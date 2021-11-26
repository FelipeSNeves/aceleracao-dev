<?php

    $planoUm = new Plano(10,2);
    $planoDois = new Plano(2,5);

    $planoUm->definirPonto($planoDois);
    $planoUm->compararPontos($planoDois);


    // Escreva uma classe chamada Plano, nessa classe reúna atributos e métodos que representem um ponto no plano cartesiano. Além dos atributos por você identificados, a classe deve oferecer os seguintes membros:
        
    class Plano
    {
            private $x;
            private $y;
            
        // Construtor que permita a inicialização do ponto na origem ou em um local informado por parâmetros.
        public function __construct($x = 0, $y = 0) 
        {
            $this->x = $x;
            $this->y = $y;
        } 

        // 1 - Método para definir o local do ponto a partir de outro ponto;
        public function definirPonto($p) {
            $this->x = $p->getX;
            $this->y = $p->getY;
        }

        // 1 - Método que faça comparação de pontos;
        public function compararPontos($p){
            if($this->x == $p->getX() && $this->y == $p->getY()){
                return true;
            }else{
                return false;
            }
        }

        // Todos os métodos de acesso getter e setter necessários, avalie a necessidade
        public function getX()
        {
            return $this->x;
        }

        public function getY()
        {
            return $this->y;
        }

    }

?>