<?php
    require_once "../../controller/controlPanel.php";
    $data = new control();
    $dado = $data->pullevents();

    $eventos = [];

    while ($arg = $dado->fetch_assoc()){
        extract($arg);

        $eventos[] = [
            'id' => $id,
            'title' => $title,
            'color' => $color,
            'start' => $e_start,
            'end' => $e_end,
        ];
        
    }
    echo json_encode($eventos);
?>