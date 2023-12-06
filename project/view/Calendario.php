<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companion - Calendario</title>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="./css/style.css">
    <script src='./scripts/Calendar/dist/index.global.min.js'></script>
    <script src='./scripts/Calendar/packages/core/locales-all.global.min.js'></script>
    <script src="./scripts/calendar.js"></script>
    <style>
        .head{
            background-color: #FFCC68;
        }
    </style>
</head>
<?php
    include "./utils/header.html";
?>
<body style="font-family: Arial, Helvetica, sans-serif;">
    <div class="return-button">
        <a href="./Home.php"><img src="./img/return.png" class="return-img"></a>
    </div>
    <div class="container">
        <div id='calendar' style="width: 90%;"></div>
    </div>
</body>
</html>