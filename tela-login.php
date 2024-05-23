<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background-color: linear-gradient(to right, rgb(20, 147, 220),rgb(17, 54, 71));
        }

        div.login{
            background-color: rgba(0, 0, 0, 0.877);
            position: absolute;
            color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
        }

        h1{
            text-align: center;
            font-size: 3em;
            margin: 10px;
        }

        input{
            padding: 12px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        p{
            padding: 15px;
        }

        .inputSubmit {
            background-color: rgb(0, 47, 255);
            border: none;
            padding: 10px;
            width: 100%;
            color: white;
            font-size: 1.2em;
            border-radius: 7px;
        }

        .inputSubmit {
            background-color: rgb(48, 86, 255);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="login">
        <h1>Login</h1>
        <form action="teste-login.php" method="post">
            <p><input type="text" name="email" id="email" placeholder="Email"></p>
            <p><input type="password" name="senha" id="senha" placeholder="Senha"></p>
            <p><input type="submit" value="Entrar" class="inputSubmit"></p>
        </form>
    </div>
</body>
</html>