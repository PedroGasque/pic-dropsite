<?php

    $servername = "localhost"; //endereco do servidor web
    $username = "wgurltox__D6P3G3WmthXEDUKnCIJT5rHHcElKg3yv";     //usuario do sgbd - mysql
    $password = "";     //senha do sgbd - mysql
    $dbname = "wgurltox_droppic"; //nome do banco de dados

    //tentativa de conexao com o banco de dados
    $conexao = new mysqli($servername, $username, $password, $dbname);
    
    if($conexao->connect_error){ //verifica que é verdadeiro
        die("Erro de conexao: " . $conexao->connect_error);
    }
    else{
        echo "boa";
    }
?>