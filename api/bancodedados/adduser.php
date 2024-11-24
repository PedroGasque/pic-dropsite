<?php

    require '../include/config.php';

    //gerar token para recuperacao de senha
    function generateToken(){
        return bin2hex(random_bytes(16));
    }

    //dados dos usuarios
    $usuarios = [
        ['nome' => 'pedro', 'email' => 'pedro@pedro.com', 'senha'=>'senha123'],
        ['nome' => 'eulampio', 'email' => 'eulampio@pedro.com', 'senha'=>'senha123'],
        ['nome' => 'jofrei', 'email' => 'jofrei@pedro.com', 'senha'=>'senha123']
    ];

    //preparar consulta sql para inserir usuarios
    $parametros = $conexao->prepare("INSERT INTO usuarios(nome,email,senha,token) values (?,?,?,?)");

    foreach($usuarios as $userlinha){
        $nome = $userlinha['nome'];
        $email = $userlinha['email'];
        $senha = $userlinha['senha'];
        $token = generateToken();

        $parametros->bind_param("ssss",$nome,$email,$senha,$token);//string texto ou varchar
        $parametros->execute();
    }

echo "usuarios cadastrados com sucesso"

?>