<?php
    $server = "localhost";
    $senha = 20032005;
    $user = "root";
    $database = "final";

    try{
        $connect = new PDO("mysql:host=$server;dbname=$database", $user, $senha);
        echo "<h1>Conectado</h1>";

    }catch(Exception $erro){
        echo "<h1>Erro aqui</h1>";
    }

?>