<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "conexao";

    $con = new mysqli($host, $user, $pass);

    $res = mysqli_query($host, $user, $pass, $bd);

    $res = mysqli_query($con,"SHOW DATABASES");
    while($row = mysqli_fetch_array($result)){
        echo $row[0]."<br>";
    }
?>
