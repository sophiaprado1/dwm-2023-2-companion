<?php
class control{
    public function pullevents(){
        require_once "../../model/Data.php";
        $data = new data();
        $dado = $data->pullevents();
        return $dado;
    }

    public function pullhorario($periodo, $dia, $horario){
        require_once "../../model/Data.php";
        $data = new data();
        $dado = $data->pullhorarios($periodo, $dia, $horario);
        return $dado;
    }

    public function pullTypeContacts($type){
        require_once "../../model/Data.php";
        $data = new data();
        $dado = $data->pullTypeContacts($type);
        return $dado;
    }
}
?>