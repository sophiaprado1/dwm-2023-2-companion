<?php
    $id = $_POST['data'];
    require "../../controller/controlPanel.php";
    $ctrl = new control();
?>
<table width=100% border="1px solid black" style="border-collapse: collapse;">
<tbody>
    <tr>
        <th>Horário</th>
        <th>Segunda-feira</th>
        <th>Terça-feira</th>
        <th>Quarta-feira</th>
        <th>Quinta-feira</th>
        <th>Sexta-feira</th>
        <th>Sábado</th>
    </tr>
    <?php
        pull($ctrl, $id);
    ?>
</tbody>
</table>
<?php
 function pull($ctrl, $period){
    $vet = [
        1 => "08:00h - 11:40h",
        2 => "14:00h - 17:40h",
        3 => "19:00h - 22:40h"
    ];
    for($i=1; $i<=3; $i++){
        echo "<tr> <th>".$vet[$i]."</th>";
        for($j = 1; $j<=6; $j++){
            $data = $ctrl->pullhorario($period, $j, $i);
            if(mysqli_num_rows($data)!=0){
                echo "<td>";
                while ($res = $data->fetch_assoc()){
                    echo "<div style='background-color:gray'>".$res['materia']."</div><div>".$res['turma']."</div><div> Docente:". $res['professor']."</div><div>".$res['sala']." do ".$res['bloco']."</div>";
                }
                echo "</td>";
            }else{
                echo "<th> </th>";
            }
        }
        echo "</tr>";
    }
}
?>