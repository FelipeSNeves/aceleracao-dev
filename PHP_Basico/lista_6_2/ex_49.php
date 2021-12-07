<?php

    // Usando um laço de repetição, crie diretórios (Pastas) com a numeração de 1 a 150 e exiba uma mensagem cada vez que um diretório for criado. Em seguida, crie dentro dos diretórios ímpares um arquivo com a nomenclatura log-{data-e-hora}.txt e exiba uma mensagem contendo um feedback ao usuário de sucesso na criação do arquivo, em seguida exiba as informações do arquivo criado, tais como tamanho do arquivo em bytes e data de modificação, e também todas as infos disponíveis no pathinfo do arquivo.

    for($contador = 1; $contador <= 150; $contador++) {

        $diretorio = "./exe_49/" .$contador; 
        
        if(mkdir($diretorio, 0777, true)){
            echo "Pasta {$contador} criada com sucesso!<br>";
        }

        if($contador % 2) {

            $nomeArquivo = $diretorio .  "/log-" . date('d-m-Y-H:i:s') . ".txt";
            $arquivo = fopen($nomeArquivo, "w");    
            echo "$nomeArquivo criado com sucesso <br><br>";

            print_r(pathinfo($nomeArquivo));

            fclose($arquivo);
        }

        echo "<br>";


    }


?>