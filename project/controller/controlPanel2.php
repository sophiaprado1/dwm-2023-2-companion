<?php
//Classe usada para logar na Área do Administrador;
if(isset($_POST['login'])){
    if($_POST['login']==1){
        $user = $_POST['user'];
        $password = $_POST['Pass'];
        $ctrl = new control();
        $ctrl->login($user, $password);
    }
}

class control{
    public function login($user, $password){
        require "../model/Data.php";
        $dataBank = new data();
        $response = mysqli_fetch_assoc($dataBank->login($user, $password));
        echo $response;
        if($response != 0){
            session_start();
            $vetor = [
                "userName" => $user,
                "passWord" => $password
            ];
            $_SESSION['login'] = 1;
            $_SESSION['data'] = json_encode($vetor);
            header("Location: ../view/Adm/view/cadUsers.php");
        }else{
            header("Refresh: 0");
            echo "Login ou senha incorretos";
        }
    }
}
?>