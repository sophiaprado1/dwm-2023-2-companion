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
}
?>