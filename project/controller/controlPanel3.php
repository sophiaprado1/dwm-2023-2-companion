<?php
//Classe usada para registrar dados no banco de dados;
var_dump($_POST);
if(isset($_POST['flag'])){
    $flag = $_POST['flag'];
    switch($flag){
        case 0: //Registro de calendário
            
        break;
        case 1: //Registro de Cardápio
        break;
        case 2: //Registro dos Contatos
        break;
        case 3: //Registro dos Horários
        break;
        case 4: //Registro de Link
        break;
        case 5: //Registro de Usuário
        break;
    }
}

class controlCadaster{
    
}
?>