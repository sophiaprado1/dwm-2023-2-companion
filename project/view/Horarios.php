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
</head>
<?php
    include "./utils/header.html";
?>
<body>
    <div class="return-button">
        <a href="./Home.php"><img src="./img/return.png" class="return-img"></a>
    </div>
    <div class="container">
        <select name="opt" class="body-div-input" id="body-div-select" aria-label="Período">
            <option selected="0">Período</option>
            <option value="1">1° Período</option>
            <option value="2">2° Período</option>
            <option value="3">3° Período</option>
            <option value="4">4° Período</option>
            <option value="5">5° Período</option>
            <option value="6">6° Período</option>
            <option value="7">7° Período</option>
            <option value="8">8° Período</option>
        </select>
    </div>
    <div class="container" style="overflow-x: auto">
        <div class="body-div" id="table" >
            
        </div>
    </div>
</body>
</html>
<script>
    var opcao = document.querySelector('[name="opt"]');

    opcao.addEventListener('change',function(){
        console.log(opcao.value);
        $.ajax({
            url: './scripts/table.php',
            type: 'POST',
            data: {data: opcao.value},
            dataType: 'html',
            success: function(data){
                $("#table").html(data);
            },
        });
    })
</script>