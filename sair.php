<?php 
    //Fechar a sessão
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: tela-login.php');

?>