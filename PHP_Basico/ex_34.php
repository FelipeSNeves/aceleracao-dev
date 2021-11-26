<?php

    /* 
        Crie um script php, onde seja capaz ler o array abaixo  e  imprimir  seus  elementos na  ordem inversa. Um valor em cada linha .

        (Array = $valores = array(0, 10, 20, 30, 40, 50,60, 70, 80, 90);)
    */  
    
    $valorOriginal = array(0, 10, 20, 30, 40, 50,60, 70, 80, 90);
    $valorReverse = array_reverse($valorOriginal);

    echo "Valor Original <br>";
    foreach ($valorOriginal as $valor) {
        echo "$valor <br>";
    }

    echo "<br>Valor Reverse <br>";
    foreach ($valorReverse as $valor) {
        echo "$valor <br>";
    }

?>