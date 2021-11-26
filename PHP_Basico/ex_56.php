<?php

    // Crie um script php capaz de criar 2 diretórios (alunos e professores), dentro do diretório alunos crie um arquivo chamado arquivo.txt. Em seguida crie uma estrutura capaz de verificar se os dois diretorios criados contém arquivos, caso não contenha arquivos lance uma exception (esssa exception deve conter o nome do arquivo e a linha do erro), salve essa exception dentro de um arquivo chamado log.txt

    mkdir("./exe_56/professores", 0777, true);

    mkdir("./exe_56/alunos", 0777, true);
    $arquivo = fopen("./exe_56/alunos/arquivo.txt", "a");
    fclose($arquivo);

    try{
        buscarArquivos('./exe_56/alunos');
        buscarArquivos('./exe_56/professores');
    }catch(Exception $e){
        $log = fopen('./exe_56/log.txt', 'w');
        fwrite($log, 'Mensagem: A pasta '.$e->getMessage().' não está vazia'.PHP_EOL);
        fwrite($log, "Arquivo: " . $e->getFile().PHP_EOL);
        fwrite($log, "Linha: " . $e->getLine().PHP_EOL);
        fclose($log);
    }
    


    function buscarArquivos($diretorio)
    {
        if(count(scandir($diretorio)) > 2) {
            throw new Exception($diretorio);
        }        

    }



?>