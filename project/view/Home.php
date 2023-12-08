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
    <style>
        .head{
            background-color: #A64DFF;
        }
    </style>
</head>
<?php
    include "./utils/header.html"; //Para alterar algo da barra header, vá para o arquivo chamado header.php em ./utils
?>
<body>
    <div class="body-div-preB">
        <div class="body-div-buttons">
        <span>
                <a href="./Horarios.php"><button class="button" style="background-color: #5CB1FF;">Horários</button></a>
            </span>
            <span>
                 <a href="./Contatos.php"><button class="button" style="background-color: #7389FF;">Contatos</button></a>
            </span>
            <span>
                <a href="./Fluxograma.php"><button class="button" style="background-color: #535252;">Fluxograma</button></a>
            </span>
            <span>
                <a href="./Links.php"><button class="button" style="background-color: #64FF3E;">Links úteis</button></a>
            </span>
            <span>
                <a href="./Calendario.php"><button class="button" style="background-color: #FFCC68;">Calendário</button></a>
            </span>
            <span>
                <a href="https://ww2.uft.edu.br/index.php/aluno" target="_blank"><button class="button" style="background-color: #FF4291;">Espaço do Aluno</button></a>
            </span>
        </div>
    </div>

    <div class="container">
        <div class="body-div" id="mural">
            <img style="width:100%; height: 100%; border-radius: 30px; "src="img/mural.jpg"/>
        </div>
    </div>
</body>
</html>