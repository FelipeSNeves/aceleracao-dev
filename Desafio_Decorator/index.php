<?php

    echo "<h4> Recheio Sal </h4>";

    $paoSal = new PaoSal;
    $arraySaboresSal = ["salameMussarela", "salame", "mussarela", "ovoMussarela", "ovoMargarina", "margarina", "ovo"];

    foreach($arraySaboresSal as $recheio) {
        $recheioSal = new $recheio($paoSal);
        echo "sabor: " . $recheioSal->getNome() . " - Valor (R$): " . $recheioSal->valor() . "<br>";
    }

    echo "===================================================== <br>";

    echo "<h4> Recheio Doce </h4>";

    $paoDoce = new PaoDoce;
    $arraySaboresDoce = ["geleia", "geleiaSalame", "geleiaPastaAmendoim", "salame", "pastaAmendoim"];

    foreach($arraySaboresDoce as $recheio) {
        $recheioDoce = new $recheio($paoDoce);
        echo "sabor: " . $recheioDoce->getNome() . " - Valor (R$): " . $recheioDoce->valor() . "<br>";
    }

    
    abstract class Pao
    {
        protected $nome;

        abstract function valor();

        function getNome()
        {
            return $this->nome;
        }
    }

    abstract class PaoDecorator extends Pao
    {
        // Métodos referentes as funcionalidades
    }

    class PaoDoce extends Pao
    {
        public function __construct()
        {
            $this->nome = 'Pao Doce';
        }

        function valor()
        {
            return 1.00;
        }
    }

    class PaoSal extends Pao
    {
        public function __construct()
        {
            $this->nome = 'Pao Sal';
        }

        function valor()
        {
            return 2.00;
        }
    }

    class salameMussarela extends PaoDecorator
    {
        private $pao;

        function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }

        function getNome()
        {
            return $this->pao->getNome() . ", Salame + Mussarela";
        }

        function valor()
        {
            return 1.25 * $this->pao->valor();
        }
    }

    class salame extends PaoDecorator
    {
        private $pao;

        function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }

        function getNome()
        {
            return $this->pao->getNome() . ", Salame";
        }

        function valor()
        {
            return 1.50 * $this->pao->valor();
        }
    }

    class mussarela extends PaoDecorator
    {
        private $pao;

        function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }

        function getNome()
        {
            return $this->pao->getNome() . ", Mussarela";
        }

        function valor()
        {
            return 1.75 * $this->pao->valor();
        }
    }
    
    class ovoMussarela extends PaoDecorator
    {
        private $pao;

        function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }

        function getNome()
        {
            return $this->pao->getNome() . ", Ovo + Mussarela";
        }

        function valor()
        {
            return 2.00 * $this->pao->valor();
        }
    }

    class ovoMargarina extends PaoDecorator
    {
        private $pao;

        function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }

        function getNome()
        {
            return $this->pao->getNome() . ", Ovo + Margarina";
        }

        function valor()
        {
            return 2.25 * $this->pao->valor();
        }
    }

    class margarina extends PaoDecorator
    {
        private $pao;

        function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }

        function getNome()
        {
            return $this->pao->getNome() . ", Margarina";
        }

        function valor()
        {
            return 2.50 * $this->pao->valor();
        }
    }

    class ovo extends PaoDecorator
    {
        private $pao;

        function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }

        function getNome()
        {
            return $this->pao->getNome() . ", Ovo";
        }

        function valor()
        {
            return 2.75 * $this->pao->valor();
        }
    }
    
    class Geleia extends PaoDecorator
    {
        private $pao;

        function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }

        function getNome()
        {
            return $this->pao->getNome() . ", Geléia";
        }

        function valor()
        {
            return 3.00 * $this->pao->valor();
        }
    }
    
    class GeleiaSalame extends PaoDecorator
    {
        private $pao;

        function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }

        function getNome()
        {
            return $this->pao->getNome() . ", Geléia + Salame";
        }

        function valor()
        {
            return 3.25 * $this->pao->valor();
        }
    }

    class GeleiaPastaAmendoim extends PaoDecorator
    {
        private $pao;

        function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }

        function getNome()
        {
            return $this->pao->getNome() . ", Geléia + Pasta de Amendoim";
        }

        function valor()
        {
            return 3.50 * $this->pao->valor();
        }
    }

    class PastaAmendoim extends PaoDecorator
    {
        private $pao;

        function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }

        function getNome()
        {
            return $this->pao->getNome() . ", Pasta de Amendoim";
        }

        function valor()
        {
            return 3.75 * $this->pao->valor();
        }
    }

?>