<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: blue;
            text-align: center;
            color: white;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 25px;
            border-radius: 10px;
        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 7px;
        }

        a:hover {
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <h1>Tela Inicial</h1>
    <div class="box">
        <a href="tela-login.php">Login</a>
        <a href="cadastro.php">Cadrastrar</a>
    </div>
</body>
</html>
