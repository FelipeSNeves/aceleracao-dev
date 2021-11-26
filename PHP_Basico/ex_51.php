<?php

    // Crie 4 cookies. Dentro de cada 1 deles defina um hash gerado usando SHA-256, como referência utilize o site (http://andti.com.br/tool/hash) . Defina 2 cookies com 1 hora de validade e os outros dois com 2 horas. Em seguida, recupere as informações dos cookies gerados e armazene-os em um arquivo chamado cookies.txt. Lembre-se de converter essas informações para um formato json antes de gravar no arquivo.

    $hash1 = hash('sha256', rand(1000, 9999));
    $hash2 = hash('sha256', rand(1000, 9999));
    $hash3 = hash('sha256', rand(1000, 9999));
    $hash4 = hash('sha256', rand(1000, 9999));

    echo $hash1;
    
    setcookie('hash1', $hash1, time() + 3600);
    setcookie('hash2', $hash2, time() + 3600);
    
    setcookie('hash3', $hash3, time() + 7200);
    setcookie('hash4', $hash4, time() + 7200);
    
    $cookies = array();
    $cookies['hash1'] = $_COOKIE['hash1'];
    $cookies['hash2'] = $_COOKIE['hash2'];
    $cookies['hash3'] = $_COOKIE['hash3'];
    $cookies['hash4'] = $_COOKIE['hash4'];

    $json = json_encode($cookies);
    
    $arquivo = fopen('cookies.txt', 'w');
    fwrite($arquivo, $json);
    fclose($arquivo);


?>