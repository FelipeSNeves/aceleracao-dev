<?php

    //  Crie 2 arrays $n1=array() e $n2=array() com 16 posições cada, onde a chave de cada um dos arrays será o nome de um aluno e o valor será sua nota de n1 ou n2, lembre-se de atribuir o mesmo nome nos dois arrays para corresponder ao mesmo aluno. Em seguida, crie uma função que receba 2 notas (N1 e N2) de um aluno e retorne um booleano indicando se o aluno passou. Para passar, a soma das notas deve ser igual ou superior a 19 e ambas devem ser superiores a 7. Escreva em um arquivo de texto chamado aluno-aprovados.txt somente o nome dos alunos aprovados.

    buscarAlunosAprovados();    


    function buscarAlunosAprovados()
    {

        $n1 = array(
            'Miguel' => '',
            'Davi' => '',
            'Gabriel' => '',
            'Arthur' => '',
            'Lucas' => '',
            'Matheus' => '',
            'Pedro' => '',
            'Guilherme' => '',
            'Gustavo' => '',
            'Rafael' => '',
            'Felipe' => '',
            'Bernardo' => '',
            'Enzo' => '',
            'Nicolas' => '',
            'João' => '',
            'Henrique'  => ''
        );
    
        $n2 = array(
            'Miguel' => '',
            'Davi' => '',
            'Gabriel' => '',
            'Arthur' => '',
            'Lucas' => '',
            'Matheus' => '',
            'Pedro' => '',
            'Guilherme' => '',
            'Gustavo' => '',
            'Rafael' => '',
            'Felipe' => '',
            'Bernardo' => '',
            'Enzo' => '',
            'Nicolas' => '',
            'João' => '',
            'Henrique'  => ''
        );

        foreach($n1 as $chave => $valor) {
            $n1[$chave] = rand(0,10);
            $n2[$chave] = rand(0,10);

            if(($n1[$chave] + $n2[$chave] >= 19) && ($n1[$chave]) > 7 && ($n2[$chave]) > 7) {
                $arquivo = fopen('aluno-aprovados.txt', 'a');
                fwrite($arquivo, "$chave \n\r");
                fclose($arquivo);
                echo $chave;
            }
        }
        
    }

?>