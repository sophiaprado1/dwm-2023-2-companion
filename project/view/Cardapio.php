<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companion - Horários</title>
    <script type="text/javascript" src="./utils/js/jquery.js"></script>  
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .head{
            background-color: #C9C9C9;
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
    <div class="container" style="font-family: Arial, Helvetica, sans-serif;">
        <div class="body-div" style="width:95%;" >
            <?php
                require_once "../controller/controlPanel.php";
                $ctrl = new control();
                $data = $ctrl->pullCardapio();
                $vetor = [
                    1 => "Segunda-Feira",
                    2 => "Terça-Feira",
                    3 => "Quarta-Feira",
                    4 => "Quinta-Feira",
                    5 => "Sexta-Feira"
                ];
                $vetor2 = [
                    0 => "Almoço",
                    1 => "Janta"
                ];
                echo "<table style='width:100%'><tr>";
                for($i=1; $i<=5; $i++){
                    echo "<th style='width:20%'>".$vetor[$i]."</th>";
                }
                echo "</tr><tr>";
                while($d = mysqli_fetch_assoc($data)){
                    $date = explode(" ", $d['dataDia']);
                    echo "<td><div>".$date[0]."</div><div>".$vetor2[$d['tipo']]."</div><div>".$d['prato']."</div></td>";
                }
                echo "</tr></table>";
                
            ?>
        </div>
    </div>
</body>
</html>