<?php
class data{
    public function pullevents(){
        $tablename = "calendar";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "SELECT * FROM $tablename";

        $result = mysqli_query($conn, $query);

        if(!empty($result)){
            return $result;
        }else{
            return null;
        }
    }

    public function pullhorarios($periodo, $dia ,$horario){
        $tablename = "horarios";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "SELECT * FROM $tablename WHERE dia = '$dia' AND periodo = '$periodo' AND hora = '$horario'";

        $result = mysqli_query($conn, $query);

        if(!empty($result)){
            return $result;
        }else{
            return null;
        }
    }

    public function pullTypeContacts($type){
        $tablename = "Contatos";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "SELECT * FROM $tablename inner join tipoDesc where '$type' = tipoDesc.id and tipo = '$type'";

        $result = mysqli_query($conn, $query);

        if(!empty($result)){
            return $result;
        }else{
            return null;
        }
    }

    public function login($user, $pass){
        $tablename = "Users";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "SELECT * FROM $tablename where '$user' = usuario and senha = '$pass'";

        $result = mysqli_query($conn, $query);

        if(!empty($result)){
            return $result;
        }else{
            return 0;
        }
    }

    public function pullLinks(){
        $tablename = "linksuteis";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "SELECT * FROM $tablename";

        $result = mysqli_query($conn, $query);

        if(!empty($result)){
            return $result;
        }else{
            return 0;
        }
    }

    public function pullCardapio(){
        $tablename = "cardapioRU";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "SELECT * FROM $tablename";

        $result = mysqli_query($conn, $query);

        if(!empty($result)){
            return $result;
        }else{
            return 0;
        }
    }

    public function registerCalendar($eventName, $DataSt, $DataOt, $color){
        $tablename = "calendar";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "INSERT INTO $tablename(title, color, e_start, e_end) VALUES ('$eventName','$color','$DataSt','$DataOt')";

        $result = mysqli_query($conn, $query);

        if($result){
            return 1;
        }else{
            return 0;
        }
    }

    public function registerCardapio($Food, $Date, $Hour, $Day){
        $tablename = "cardapioRU";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "SELECT id FROM $tablename WHERE dia = '$Day' and tipo = '$Hour'";
        $result = mysqli_query($conn, $query);

        $id = mysqli_fetch_assoc($result);
        $id = $id['id'];
        
        $query = "UPDATE $tablename set dataDia = '$Date', prato = '$Food' WHERE '$id' = id";

        $result2 = mysqli_query($conn, $query);

        if($result2){
            return 1;
        }else{
            return 0;
        }
    }

    public function registerContatos($Type,$Work,$Name,$Telephone,$Email){
        $tablename = "Contatos";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "INSERT INTO $tablename(tipo, posição, nome, telefone, email) VALUES ('$Type','$Work','$Name','$Telephone', '$Email')";

        $result = mysqli_query($conn, $query);

        if($result){
            return 1;
        }else{
            return 0;
        }
    }

    public function registerHorarios($Day,$Period,$Hour,$Mat,$Clas,$Name,$Room,$Local){
        $tablename = "horarios";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "INSERT INTO $tablename(dia, periodo, hora, materia, turma, professor, sala, bloco) VALUES ('$Day','$Period','$Hour','$Mat','$Clas','$Name','$Room','$Local')";

        $result = mysqli_query($conn, $query);

        if($result){
            return 1;
        }else{
            return 0;
        }
    }

    public function registerLinks($Title,$Desc,$Link,$Color){
        $tablename = "linksUteis";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "INSERT INTO $tablename(links, cores, titulo, descricao) VALUES ('$Link','$Color','$Title','$Desc')";

        $result = mysqli_query($conn, $query);

        if($result){
            return 1;
        }else{
            return 0;
        }
    }

    public function registerUsers($Name,$Pass,$User,$Email){
        $tablename = "users";
        
        require_once "Connection.php";

        $connection = new conn();
        $conn = $connection->connect();

        $query = "INSERT INTO $tablename(nome, usuario, senha) VALUES ('$Name','$User','$Pass')";

        $result = mysqli_query($conn, $query);

        if($result){
            return 1;
        }else{
            return 0;
        }
    }

    function converterFormatoData($dataNoFormatoDDMMAAAA) {
        
        list($dia, $mes, $ano) = explode('/', $dataNoFormatoDDMMAAAA);
    
        
        $novaDataFormatada = sprintf('%04d/%02d/%02d', $ano, $mes, $dia);
    
        return $novaDataFormatada;
    }
    
    
}
?>