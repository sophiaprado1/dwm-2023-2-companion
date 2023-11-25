<?php
    session_start();
    require "../controller/controlPanel.php";
    $ctrl = new control();
    $data = $ctrl->pulllinks();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companion - Links Úteis</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .head{
            background-color: #64FF3E;
        }
    </style>
</head>
<?php
    include "./utils/header.html";
?>
<body>
    <div class="return-button">
        <a href="./Home.php"><img src="./img/return.png" class="return-img"></a>
    </div>
    <div class="container" style="flex-direction: column; border-radius:30px">
        <?php
            while($res = mysqli_fetch_assoc($data)){
                echo "
                <div class='mini-links' style='background-color:".$res['cores']."'>
                    <a target='_blank' rel='noopener' href=".$res['links']." style='text-decoration:none;'>
                        <div class='links'>
                            <div>".$res['titulo']."</div>
                            <div>".$res['descricao']."</div>
                        </div>
                    </a>
                </div>";
            }
        ?>
    </div>
</body>
</html>