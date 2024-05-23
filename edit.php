<?php 
    // Verificação da sessão //
    if(!empty($_GET['id'])){
        // print_r($_POST['name'])
        // print_r($_POST['email'])
        // print_r($_POST['phone'])
        // print_r($_POST['sexo'])
        // print_r($_POST['dataNascimento'])
        // print_r($_POST['cidade'])
        // print_r($_POST['estado'])
        // print_r($_POST['endereço'])

        include_once('config.php'); // Incluindo o arquivo de configuração do DB //

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $res = $conexao->query($sqlSelect);
        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $name = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
                $phone = $user_data['phone'];
                $gender = $user_data['sexo'];
                $birthDate = $user_data['dataNascimento'];
                $city = $user_data['cidade'];
                $state = $user_data['estado'];
                $adress = $user_data['endereço'];
            }
        }else{
            header('Location: sistema.php');
        }

    }else{
        header('Location: sistema.php ');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220),rgb(17, 54, 71));
        }

        .login{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.76);
            color: white;
            padding: 15px;
            border-radius: 10px;
            width: 330px;
        }

        fieldset{
            border: 3px solid dodgerblue;
        }

        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            background-color: dodgerblue;
            text-align: center;
            border-radius: 8px;
        }

        p{
            margin-bottom: 30px;
        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom:1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus ~ .labelInput, .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 0.8em;
        }

        #dataNascimento {
            border: none;
            padding: 10px;
            border-radius: 10px;
            outline: none;
        }

        .submit{
            width: 100%;
            padding: 15px;
            border: none;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            background-color: dodgerblue;
            color: white;
            font-weight: bolder;
        }

        .submit:hover {
            background-color: rgb(30, 83, 255)
        }
    </style>
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="login">
        <form action="saveEdit.php" method="post" autocomplete="off">
            <fieldset>
                <legend><b>Formulário de entrada</b></legend>
                <div class="inputBox">
                    <p>
                        <input type="text" name="nome" id="nome" class="inputUser" class="inputUser" required value="<?= $nome?>"> 
                        <label for="nome" class="labelInput">Nome</label>
                    </p>
                </div>
                <div class="inputBox">
                    <p>
                        <input type="text" name="senha" id="senha" class="inputUser" class="inputUser" required value="<?= $senha?>">
                        <label for="senha" class="labelInput">Senha</label>
                    </p>
                </div>
                <div class="inputBox">
                    <p>
                        <input type="text" name="email" id="email" class="inputUser" required class="email" value="<?= $email?>">
                        <label for="email" class="labelInput">E-Mail</label>
                    </p>
                </div>
                <div class="inputBox">
                    <p>
                        <input type="tel" name="phone" id="phone" class="inputUser" required class="phone" value="<?= $phone?>">
                        <label for="phone" class="labelInput">Telefone</label>
                    </p>
                </div>
                <div class="inputBox">
                    Sexo:
                    <p>
                        <input type="radio" name="sexo" id="masculino" value="masculino" <?= $sexo =='masculino' ? 'checked' : ''?>>
                        <label for="masculino">Masculino</label>
                    </p>
                    <input type="radio" name="sexo" id="feminino" value="feminino" <?= $sexo =='feminino' ? 'checked' : ''?>>
                    <label for="feminino">Feminino</label>
                </div>
                <div class="inputBox">
                    <p><label for="dataNascimento"><b>Data de Nascimento: </b></label>        <input type="date" name="dataNascimento" id="dataNascimento" required value="<?= $dataNascimento?>"></p>
                </div>
                <div class="inputBox">
                    <p>
                        <input type="text" name="cidade" id="cidade" class="inputUser" required value="<?= $cidade?>">
                        <label for="cidade" class="labelInput">Cidade</label>
                    </p>
                </div>
                <div class="inputBox">
                    <p>
                        <input type="text" name="estado" id="estado" class="inputUser" required value="<?= $estado?>">
                        <label for="estado" class="labelInput">Estado</label>
                    </p>
                </div>
                <div class="inputBox">
                    <p>
                        <input type="text" name="endereço" id="endereço" class="inputUser" required value="<?= $endereco?>">
                        <label for="cidade" class="labelInput">Endereço</label>
                    </p>
                </div>
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="Salvar" id="Salvar" class="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>