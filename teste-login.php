<?php 
    session_start();
    //print_r($_REQUEST)
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //Acessa o DB através do arquivo config.php
        include_once('config.php');

        // Criando variaveis para armazenar o email e a senha fornecidos pelo usuário //
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        // Verificando se os dados informados estão contidos no banco de dados //
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        //Fazendo a conexão no banco de dados e executando o que foi setado na variavel $sql. //
        $res = $conexao->query($sql);

        // Imprimindo na tela o que foi encontrado e o que foi executado no DB //
        // print_r($res);
        // print_r($sql);


        // Verificação se existe alguma "linha" no banco de dados que condiz com o que foi passado pelo usuário
        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }

        } else{
            //Não acessa o Sistema e redireciona para a tela de login
            header('location: tela-login.php');
        }

?>