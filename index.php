<?php
function phpconnect(){

    $host = "localhost";
    $user = "root";
    $pass = "";
    $con = mysqli_connect($host, $user, $pass);
    $res = $con->query("SHOW TABLES FROM exercicio1");


    if (!$con) {
        die("Falha na conexão: " . mysqli_connect_errno());
        return false;
    } else {
        echo "Conexão realizada com sucesso<br>";
        
        return (print_r($res));
    }
}   
phpconnect();

