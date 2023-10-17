<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companion - Home</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<?php
    include "./utils/header.html"; //Para alterar algo da barra header, vá para o arquivo chamado header.php em ./utils
?>
<body>
    <div class="container">
        <div class="body-div" id="search">
            <img src="./img/search.png" class="body-div-img">
            <input type="text" class="body-div-input" placeholder="Busca">
        </div>
    </div>
    <div class="body-div">
        <span>
            <a href="./Horarios.php"><button class="button" style="background-color: #00987F;">Horários</button></a>
        </span>
        <span>
            <a href="./Contatos.php"><button class="button" style="background-color: #00639B;">Contatos</button></a>
        </span>
        <span>
            <a href="./Fluxograma.php"><button class="button" style="background-color: #A00090;">Fluxograma</button></a>
        </span>
        <span>
            <a href="./Links.php"><button class="button" style="background-color: #3B9C23;">Links úteis</button></a>
        </span>
        <span>
            <a href="./Calendario.php"><button class="button" style="background-color: #FFA800;">Calendário</button></a>
        </span>
        <span>
            <a href="https://ww2.uft.edu.br/index.php/aluno" target="_blank"><button class="button" style="background-color: #C10554;">Espaço do Aluno</button></a>
        </span>
    </div>
    <div class="container">
        <div class="body-div" id="mural">
            Informação;
        </div>
    </div>
</body>
</html>