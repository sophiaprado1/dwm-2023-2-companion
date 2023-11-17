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
          $Food =  $vet['food'];
          $Date =  $vet['date'];
          $Hour =  $vet['hour'];
          $Day =  $vet['day'];
          $data = new data();
            if($data->registerCardapio($Food,$Date,$Hour,$Day)){
                echo json_encode("success");
            }else{
                echo "error";
            }

        break;
        case 2: //Registro dos Contatos
            $Type = $vet['Type'];
            $Work = $vet['Work'];
            $Name = $vet['Name'];
            $Telephone = $vet['Telephone'];
            $Email = $vet['Email'];
            $data = new data();
            if($data->registerContatos($Type,$Work,$Name,$Telephone,$Email)){
                echo json_encode("success");
            }else{
                echo "error";
            }

        break;
        case 3: //Registro dos Horários
           $Day = $vet['day'];
           $Period = $vet['period'];
           $Hour = $vet['hour'];
           $Mat = $vet['mat'];
           $Clas = $vet['clas'];
           $Name = $vet['name'];
           $Room = $vet['room'];
           $Local = $vet['local'];
           $data = new data();
            if($data->registerHorarios($Day,$Period,$Hour,$Mat,$Clas,$Name,$Room,$Local)){
                echo json_encode("success");
            }else{
                echo "error";
            }

        break;
        case 4: //Registro de Link
           $Title = $vet['Title'];
           $Desc = $vet['Desc'];
           $Link = $vet['link'];
           $Color = $vet['color'];
           $data = new data();
            if($data->registerLinks($Title,$Desc,$Link,$Color)){
                echo json_encode("success");
            }else{
                echo "error";
            }

        break;
        case 5: //Registro de Usuário
          $Name = $vet['Name'];
          $Pass = $vet['Pass'];
          $User = $vet['User'];
          $Email = $vet['Email'];
          if($data->registerUsers($Name,$Pass,$User,$Email)){
            echo json_encode("success");
          }else{
                echo "error";
          } 

        break;
    }
}else{
    echo "erro";
}

class controlCadaster{
    
}
?>