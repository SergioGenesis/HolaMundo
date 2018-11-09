<?php
$user = $_POST["user"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$cars = $_POST["cars"];

include('layouts/perl.php');
?>

<h1> Datos del formulario </h1>
<div class="container">
    <label>Usuario: <?php echo $user?></label><br>
    <label>Password: <?php echo $pass?></label><br>
    <label>E-mail: <?php echo $email?></label><br>
    <label>Carros: <?php echo $cars?></label><br>


</div>

<?php

include ('layouts/footer.php');

?>