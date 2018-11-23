<?php
    $username = "root";
    $servername = "localhost";
    $password = "";
    $basedatos  = "mi_bd";
    try{
        $con = new PDO("mysql:host = $servername;dbname = $basedatos",$username, $password);
        $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e){

        echo ("<div alig = 'center'><h1>No se pudo conectar: </h1></div>".$e->getMessage());
    }

    ?>