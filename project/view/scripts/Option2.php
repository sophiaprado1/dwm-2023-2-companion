<?php
    $id = $_POST['data'];
    require "../../controller/controlPanel.php";
    $ctrl = new control();
    $vet = $ctrl->pullTypeContacts($id);   
    $vetDta = [];
?>
<div class="container" style="margin-top: 7px;">
    <select name="opt2" class="body-div-input" id="body-div-select" aria-label="">
        <option selected="0">Pessoa</option>
        <?php
            $i = 1;
            while($data = mysqli_fetch_assoc($vet)){
                echo "<option value='$i'>".$data['nome']."</option>";
                $vetDta[$i] = $data;
            }
            echo "<script> var vetor = ".json_encode($vetDta)."</script>"
        ?>
    </select>
</div>
<div class="container" style="margin-top: 7px; font-family: Arial, Helvetica, sans-serif; font-size:18px;">
    <div id="Fix" style="background-color: white; width: 95%; height:max-content; text-align:left; margin-top:7px; border-radius:30px;">
        <div id="Pessoa" style="margin-left: 35px;">
        
        </div>
    </div>
</div>




<script>
        var opcao2 = document.querySelector('[name="opt2"]');

        opcao2.addEventListener('change',function(){
                console.log(vetor);
                console.log(opcao2.value);
                if(opcao2.value != "Pessoa"){
                    $.ajax({
                    url: './scripts/CardPessoa.php',
                    type: 'POST',
                    data: vetor[opcao2.value],
                    dataType: 'html',
                    success: function(data){
                        $("#Pessoa").html(data);
                    },
                });
            }
        })
</script>