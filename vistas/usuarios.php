<?php
require_once '../php/conexion.php';
$sql = 'select * from mi_bd.usuario';
$result = $conn->query($sql);
$usuarios = $result->fetchAll( );
include 'layouts/perl.php';
?>

<div class="container">

    <h1>Listado de usuarios </h1>
    <table>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apell_mat</th>
            <th>apell_pat</th>
            <th>Acciones</th>
        </tr>
        <tbody>

        <?php
        foreach ($usuarios as $usuario){
            echo ("<tr>");
            echo ("<td>".$usuario['id']."</td>");
            echo ("<td>".$usuario['nombre']."</td>");
            echo ("<td>".$usuario['apellido_mat']."</td>");
            echo ("<td>".$usuario['apellido_pat']."</td>");
            echo ("<td>
                            <a><button>Eliminar</button></a>
                            <a><button>Actualizar</button></a>
                       </td>");
            echo ("</tr>");
        }

        ?>
        </tbody>
    </table>

</div>

<?php
include 'layouts/footer.php';

?>
