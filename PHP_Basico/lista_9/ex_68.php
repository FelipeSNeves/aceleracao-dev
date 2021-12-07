<?php

    /** 
        *Com base nas interfaces abaixo, escreva um método que receba dois parâmetros: um array A de objetos que implementam a interface Animal representando diversos Animais e um objeto que implementa a interface Ferramentas.

        *O método deve contabilizar o número de animais disponíveis em cada uma das espécies e retornar os resultados como um vetor de objetos da classe Resultado (apresentada abaixo). Cada objeto conterá uma espécie e o número de animais da mesma contabilizados. Devem ser consideradas apenas as espécies cujos animais estão presentes no array.
    */ 

    interface Animal
    {
        public function getNomeEspecie();
        public function getNomeAnimal();
    }

    interface Ferramentas
    {
        public function filtraEspecie($animal = [], $espercieFiltrar);
        public function classificaEspecies($animal = []);
    }

    class Animais implements Animal
    {
        
        private $nomeEspecie;
        private $nomeAnimal;

        public function __construct($nomeEspecie, $nomeAnimal)
        {
            $this->nomeEspecie = $nomeEspecie;
            $this->nomeAnimal = $nomeAnimal;
        }
        
        function getNomeEspecie() {
            return $this->nomeEspecie;
        }
        
        function getNomeAnimal()
        {
            return $this->nomeAnimal;
        }
    }

    class Ferramenta implements Ferramentas {

        public function filtraEspecie($completo = [], $especieFiltrar)
        {
            $completoFiltrado = [];

            foreach ($completo as $key => $animal) {
                if ($animal instanceof Animal) {
                    if ($animal->getNomeEspecie() === $especieFiltrar) {
                        $completoFiltrado[] = $animal;
                    }
                }
            }
            return $completoFiltrado;
        }

        public function classificaEspecies($completo = []) 
        {
            $especies = [];
            
            foreach ($completo as $key => $animal) {
                if ($animal instanceof Animal) {
                    if (!in_array($animal->getNomeEspecie(), $especies)) {
                        array_push($especies, $animal->getNomeEspecie());
                    }
                }
            }

            return $especies;
        }
    }

    class Resultado 
    {

        private $nomeEspecie;
        private $quantidade;
    
        public function getNomeEspecie()
        {
            return $this->nomeEspecie;
        }

        public function getQuantidade() 
        {
            return $this->quantidade;
        }
    }   

    $cachorro = new Animais('pitbull', 'Poodle' ,'Labrador');   
    $arrayDeAnimais = [$cachorro];
    
    print_r($arrayDeAnimais);
    
    $ferramenta = new Ferramenta();   
    $especies = $ferramenta->classificaEspecies($arrayDeAnimais);
    
    print_r($especies);
    
    $labrador = $ferramenta->filtraEspecie($arrayDeAnimais, 'Labrador');
    
    print_r($labrador)

?>