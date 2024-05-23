<?php 
    // Conexão com o Banco de Dados //
    $dbhost = 'localhost';  //Host do Banco de Dados
    $dbUsername = 'root'; //Usuário de login do banco de dados, por padrão é root
    $dbPass = ''; //Senha para acesso do banco de dados por padrão é vazia
    $dbName = 'form-login'; //Nome do banco de dados


    // Função para a conexão no banco de dados //
    $conexao = new mysqli($dbhost, $dbUsername, $dbPass, $dbName);


    //Verificação se a conexão foi bem sucedida //
    
    // if ($conexao -> connect_errno){
    //     echo "Erro";
    // } else {
    //     echo "Conectado com sucesso";
    // }
?>