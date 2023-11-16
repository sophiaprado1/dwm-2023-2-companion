<?php
include_once "../model/Data.php";
//Classe usada para registrar dados no banco de dados;
if(isset($_POST['response'])){
    $vet = explode('"', $_POST['response']);
    $arr = array();
    $i = 0;
    foreach($vet as $d){
        if($d != '{' && $d != '}' && $d != ',' && $d != ':'){
            $d = str_replace(":", "", $d);
            $d = str_replace(",", "", $d);
            $arr[$i] = $d;
            $i++;
        }
    }
    $vet = array();
    $i = 0;
    $key = "";
    foreach($arr as $d){
        if($i%2==0){
            $key = $d;
        }else{
            $vet[$key] = $d;
        }
        $i++;
    }

    switch($vet['flag']){
        case 0: //Registro de calendário
            $eventName = $vet['Event'];
            $DataSt = $vet['dataIn'];
            $DataOt = $vet['dataOut'];
            $color = $vet['color'];
            $data = new data();
            if($data->registerCalendar($eventName, $DataSt, $DataOt, $color)){
                echo json_encode("success");
            }else{
                echo "error";
            }
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
}else{
    echo "erro";
}

class controlCadaster{
    
}
?>