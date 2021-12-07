<?php

    // Crie um script PHP capaz de ler um diretório com 3 arquivos distintos( arquivo1.txt , arquivo2.txt, arquivo3.txt). Em seguida armazene dentro de cada 1 desses arquivos as informações dessa url (https://jsonplaceholder.typicode.com/photos); Exclua o arquivo2.txt e depois tente abrir ele com fopen trate o erro lançando uma exception. Depois recupere as informações dos arquivos restantes e transforme as informações de cada arquivo em um array. Exiba essas informações usando var_export.

    $arquivos = scandir("./exe_60/");

    foreach($arquivos as $arquivo) {

        if($arquivo != '.' && $arquivo != '..') {
            
            $abrirDocumento = fopen("./exe_60/$arquivo", "w");
            fwrite($abrirDocumento, file_get_contents('https://jsonplaceholder.typicode.com/photos'));
            fclose($abrirDocumento);
        }
    }

    unlink("./exe_60/arquivo2.txt");

    try {
        buscarArquivo2();
    } catch(Exception $e) {
        echo $e->getMessage() . "<br>";
    }

    $leituraConteudo = '';
    foreach($arquivos as $arquivo) {

        if($arquivo != '.' && $arquivo != '..') {
            
            $abrirDocumento = fopen("./exe_60/$arquivo", "r");
            
            while(!feof($abrirDocumento)){
                $leituraConteudo .= fgets($abrirDocumento);
            }

            fclose($abrirDocumento);
            
            echo "$arquivo: <br>";
            var_export($leituraConteudo);
            echo "<br>";
        }
    }



    function buscarArquivo2()
    {
        if(!(fopen("./exe_60/arquivo2.txt", "r"))) {
            throw new Exception('arquivo2.txt não localizado');
        }

        return true;
    }






?>