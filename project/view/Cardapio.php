<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companion - Cardápio RU</title>
    <script type="text/javascript" src="./utils/js/jquery.js"></script>  
    <link rel="stylesheet" href="./css/style.css">
</head>
<?php
    include "./utils/header.html";
?>
<body>
    <div class="return-button">
        <a href="./Home.php"><img src="./img/return.png" class="return-img"></a>
    </div>
    <div class="container" style="font-family: Arial, Helvetica, sans-serif;" style="overflow-x: auto">
        <div class="body-div" style="width:95%;" style="overflow-x: auto">
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
                echo "<table style='width:100%; border-collapse: collapse;' border='1px solid black'><tr>";
                for($i=1; $i<=5; $i++){
                    echo "<th style='width:20%'>".$vetor[$i]."</th>";
                }
                echo "</tr><tr>";
                $aux = [];
                $t = 0;
                while($d = mysqli_fetch_assoc($data)){
                    if($d['tipo'] == 1){
                        $aux[$t] = $d;
                        $t++;
                    }else{
                        $date = explode(" ", $d['dataDia']);
                        $date2 = explode("-", $date[0]);
                        echo "<td><div style='background-color: lightgray'><strong>".$date2[2]."/".$date2[1]."/".$date2[0]."</strong></div><div>".$vetor2[$d['tipo']]."</div><div>".$d['prato']."</div></td>";
                    }
                }
                echo "</tr><tr>";
                for($i = 0; $i<$t; $i++){
                    $date = explode(" ", $aux[$i]['dataDia']);
                    $date2 = explode("-", $date[0]);
                    echo "<td><div style='background-color: lightgray'><strong>".$date2[2]."/".$date2[1]."/".$date2[0]."</strong></div><div>".$vetor2[$aux[$i]['tipo']]."</div><div>".$aux[$i]['prato']."</div></td>";
                }
                echo "</tr></table>";
            ?>
        </div>
    </div>
</body>
</html>