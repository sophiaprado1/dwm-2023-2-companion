<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="./utils/js/jquery.js"></script>  
    <title>Companion - Contatos</title>
    <style>
        .head{
            background-color: #7389FF;
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
    <div class="container">
        <select name="opt" class="body-div-input" id="body-div-select" aria-label="Tipo">
            <option selected="0">Nenhum</option>
            <option value="1">Centro Acadêmico</option>
            <option value="2">Professores</option>
            <option value="3">Coordenação</option>
            <option value="4">Ouvidoria</option>
            <option value="5">Secretaria Acadêmica</option>
        </select>
    </div>
    <div id="new">

    </div>
</body>
</html>
<script>
    var opcao = document.querySelector('[name="opt"]');

    opcao.addEventListener('change',function(){
        console.log(opcao.value);
        $.ajax({
            url: './scripts/Option2.php',
            type: 'POST',
            data: {data: opcao.value},
            dataType: 'html',
            success: function(data){
                $("#new").html(data);
            },
        });
    })
</script>