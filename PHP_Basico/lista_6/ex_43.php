<?php

    // Crie uma pasta e coloque 4 imagens de sua escolha dentro dela. Falando sobre informações de arquivos, use a função pathinfo e exiba as informações do arquivo. Não exiba:   “.” ou “..” ,use uma condicional para resolver isso.

    var_dump(pathinfo("img/img1.jpg"));
    echo "<br><br>";

    var_dump(pathinfo("img/img2.jpg"));
    echo "<br><br>";
    
    var_dump(pathinfo("img/img3.jpg"));
    echo "<br><br>";
    
    var_dump(pathinfo("img/img4.jpg"));

?>