<?php

    // Usando scandir, leia todos os diretórios criados de 1 a 150 no exercício anterior. Escreva uma mensagem sempre que um diretório estiver vazio, caso ele esteja vazio exclua ele e mostre uma mensagem ao usuário. Para os diretórios que estiverem com arquivos dentro, crie um array e adicione o filename de cada um dos arquivos dentro do array usando array_push, por fim exiba as informações do array.


    $diretorioComConteudo = array();
    for($contador = 1; $contador <= 150; $contador++) {

        $diretoriosLidos = scandir("exe_49/" . $contador);
           
        if(end($diretoriosLidos) == '..'){
            echo "Diretório $contador está vazio <br>";
            
            if(rmdir("exe_49/" . $contador)) {
                echo "Diretório $contador excluído com sucesso. <br>";
            }

        }

        if(!empty(end($diretoriosLidos))){
            array_push($diretorioComConteudo, end($diretoriosLidos));
        }
        
    }

    var_export($diretorioComConteudo);


?>