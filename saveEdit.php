<?php 
    include_once('config.php');
    //Editando os registros dentro do banco de dados
    if(isset($_POST['update'])){
        $name = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['phone'];
        $sexo = $_POST['sexo'];
        $dataNascimento = $_POST['dataNascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereço = $_POST['endereço'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome',email='$email',senha='$senha',telefone='$telefone',sexo='$sexo',data_nasc='$dataNascimento',cidade='$cidade',estado='$estado',endereco='$endereço' WHERE id=''$id";

        $res=$conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');

?>