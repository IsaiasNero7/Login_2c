<?php

    $host ='localhost';
    $usuario = "root";
    $senha = "";
    $banco = "infor2";

    $mysqli = new mysqli($host, $usuario, $senha, $banco);

    if ($mysqli->connect_error) {
        die("falha em conectar ao banco de dados" . $mysqli->connect_error);
    }
    else {
        echo"conexão bem sucedida";
    }
?>