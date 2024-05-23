<?php 
   // Deletar os Registros do DB //
   if(!empty($_GET['id'])){
        include_once('config.php'); // Incluindo o arquivo de configuração do DB //

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $res = $conexao->query($sqlSelect);
        if($result->num_rows > 0){
          $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
          $resDelete = $conexao->query($sqlDelete);
        }else{
            header('Location: sistema.php');
        }
    }


?>