<!doctype html>
<?php
require_once "conexion.php";
$id = $_GET['id'];
$sqlDelete = 'DELETE * FROM mi_bd.usuarios where ='.$id;
$stm = $conn->exec($sqlDelete);
http_redirect('');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>