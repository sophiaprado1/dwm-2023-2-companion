<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de novo usuário</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="body">
    <div class="container">
        <h1>Tela de Cadastro</h1>
        <form action="../controller/cadPanel.php" method="post" id="loginForm">
                <label for=""><strong>Usuario:</strong></label>
                <input class="entrada" type="text" name="user" placeholder="Nome de Usuário"  required>
                <label for=""><strong>Senha:</strong></label>
                <input class="entrada" type="password" name="Pass" placeholder="Senha"  required>
                <label for=""><strong>Nome:</strong></label>
                <input class="entrada" type="text" name="name" placeholder="Nome Completo"  required>
                <label for=""><strong>Email:</strong></label>
                <input class="entrada" type="email" name="email" placeholder="seuemail@gmail.com" required>
                <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>