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

    function botao_img($name, $img) {
        include "./utils/botaohome.php";
    }
?>
<body>
    <div class="body-div-preB">
        <div class="body-div-buttons">
            
            <span>
                <a href="./Horarios.php">
                    <?php botao_img("Horários", "./img/buttons/horarios.png"); ?>
                </a>
            </span>
            <span>
                <a href="./Contatos.php">
                    <?php botao_img("Contatos", "./img/buttons/contatos.png"); ?>
                </a>
            </span>
            <span>
                <a href="./Fluxograma.php">
                    <?php botao_img("Fluxograma", "./img/buttons/fluxograma.png"); ?>
                </a>
            </span>
            <span>
                <a href="./Links.php">
                    <?php botao_img("Links Úteis", "./img/buttons/links.png"); ?>
                </a>
            </span>
            <span>
                <a href="./Calendario.php">
                    <?php botao_img("Calendário", "./img/buttons/calendario.png"); ?>
                </a>
            </span>
            <span>
                <a href="https://ww2.uft.edu.br/index.php/aluno" target="_blank">
                    <?php botao_img("Espaço do Aluno", "./img/buttons/espaco_aluno.png"); ?>
                </a>
            </span>
        </div>
    </div>

    <div class="container">
        <div class="body-div" id="mural">
            Informação;
        </div>
    </div>
</body>
</html>