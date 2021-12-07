<?php
    
    /*  
     
        * Dada a String abaixo:

        * $texto = “O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.”;

        * Escreva com o comando echo separado por quebra de linha cada uma das opções abaixo separadamente.

    */

    $texto = "O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.";

    echo $texto;

    echo "<br> ======================== <br>";

    // ➔ Transforme o texto acima todo em minúsculo.
    echo strtolower($texto);

    echo "<br> ======================== <br>";

    // ➔ Deixe todas as letras do texto maiúsculas.
    echo strtoupper($texto);

    echo "<br> ======================== <br>";

    // ➔ Deixa apenas a primeira letra de todas as frases como maiúsculas.
    echo ucfirst($texto);

    echo "<br> ======================== <br>";
    
    // ➔ Deixe todas as primeiras letras de cada palavras maiúsculas.
    echo ucwords($texto);




?>