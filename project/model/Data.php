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
}
?>