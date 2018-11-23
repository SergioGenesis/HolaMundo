<?php
require_once '../php/conexion.php';
$sql = 'SELECT * FROM usuario';
$result = $con->query($sql);
$username = $result ->fetchAll();
include 'layouts/head.php';
?>

<div class="container">

    <h1>Listado de usuarios </h1>
    <table>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellido paterno</th>
            <th>apellido materno</th>
        </tr>
        <tbody>
        <?php


        ?>
        </tbody>
    </table>

</div>

<?php
include 'layouts/footer.php';

?>
