<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="./utils/js/jquery.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="body">
    <div>
        <div class="container">
            <h1>Tela de Login</h1>
            <form action="../../../controller/controlPanel2.php" method="post" id="loginForm">
                <input type="hidden" class="entrada"name="login" value="1">
                <label for=""><strong>Usuario:</strong></label><br>
                <input type="text" class="entrada" name="user" placeholder="Nome de Usuário" required><br>
                <label for=""><strong>Senha:</strong></label><br>
                <input type="password" class="entrada"name="Pass" placeholder="Senha" required><br>
                <button type="submit">Entrar</button><br>
            </form>
        </div>
    </div>
</body>
</html>