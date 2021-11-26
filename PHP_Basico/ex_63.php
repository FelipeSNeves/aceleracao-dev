<?php 


    class Porta
    {

        private $aberta;
        private $cor;
        private $dimensaoX;
        private $dimensaoZ;

        public function abre() : void{
        
        }

        public function fecha(): void {

        }

        public function pinta(String $cor){

        }


    }

    class Casa extends Imovel
    {

        private $porta1;
        private $porta2;
        private $porta3;

    }

    class Edificio extends Imovel
    {

        private $totalDePortas;
        private $totalDeAndares;
        private $portas = [];


        public function adicionarAndar()
        {
        }

        public function totalDeAndares()
        {
        }


    }

    class Imovel 
    {

        protected $cor;

        public function pinta($cor)
        {
        }

        public function quantasPortasEstaoAbertas()
        {
        }
        
        public function totalPortas()
        {
        }
    }
  
