<?php
$username = "root";
$servername = "localhost";
$password = "";
$basedatos  = "mi_bd";
try{
    $conn = new PDO("mysql:host = $servername;dbname = $basedatos", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo ("<div align ='center'><h1>Conexión exitosa</h1>");
} catch (PDOException $e){
    echo ("<div align = 'center'><h1>No se pudo conectar: </h1></div>".$e->getMessage());
}

?>