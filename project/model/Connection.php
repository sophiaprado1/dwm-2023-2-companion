<?php
class conn{
    public function connect(){
        $user = "root";//Nome de usuário usado no servidor de hospedagem
        $password = "";//Senha usada no servidor de hospedagem
        $host = "localhost";//Nome do servidor de hospedagem
        $dbname = "companion";//Nome do banco de dados
        $conn = mysqli_connect($host, $user, $password, $dbname);
        // Verificar se a conexão foi bem-sucedida
        if(!$conn) {
            die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
        }else{
            // Configurar o conjunto de caracteres para UTF-8
            mysqli_set_charset($conn, "utf8");
            return $conn;
        }
    }
}
?>