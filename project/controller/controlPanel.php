<?php
class control{
    public function pullevents(){
        require_once "../../model/Data.php";
        $data = new data();
        $dado = $data->pullevents();
        return $dado;
    }
}
?>