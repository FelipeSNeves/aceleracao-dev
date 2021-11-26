<?php

    // Crie um arquivo chamado exercicio7.php; Crie um script php capaz de ler 3 notas de um aluno e seu nome, depois calcule a média final deste aluno, considerando que a média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5. Exiba seu nome e a média final;

    $nome = "Felipe";
    $notaUm = rand(0,10) * 0.2;
    $notaDois = rand(0,10) * 0.3;
    $notaTres = rand(0,10) * 0.5;
    $media = $notaUm + $notaDois + $notaTres;
    echo "O aluno $nome ficou com a média $media";

?>