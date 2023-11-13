<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de novo usuário</title>
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="../../utils/js/jquery.js"></script>  
</head>
<body class="body">
    <div class="container">
        <select name="opt" class="body-div-input" id="body-div-select" aria-label="Cadastrar">
            <option selected="3">Selecionar</option>
            <option value="1">Horários</option>
            <option value="2">Contatos</option>
            <option value="3">Links</option>
            <option value="4">Calendário</option>
            <option value="5">Cardápio</option>
            <option value="6">Usuario</option>
        </select>
    </div>
    <div class="container">
        <div id="form">

        </div>
    </div>
</body>
</html>
<script>
    var opcao = document.querySelector('[name="opt"]');

    opcao.addEventListener('change',function(){
        console.log(opcao.value);
        if(opcao.value == 1){
            $("#form").load("./utils/CadHorarios.html");
        }else{
            if(opcao.value == 2){
                $("#form").load("./utils/CadContatos.html");
            }else{
                if(opcao.value == 3){
                    $("#form").load("./utils/CadLinks.html");
                }else{
                    if(opcao.value == 4){
                        $("#form").load("./utils/CadCalend.html");
                    }else{
                        if(opcao.value == 5){
                            $("#form").load("./utils/CadCardap.html");
                        }else{
                            $("#form").load("./utils/CadUsers.html");
                        }
                    }
                }
            }
        }
        
    })
</script>