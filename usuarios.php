<?php
session_start();

if(!isset($_SESSION['correo'])){
    header("Location: index.php");
    exit();
}

include("conexion.php");

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuarios Registrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="contenedor tabla-contenedor">

    <h2>Usuarios Registrados</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
        </tr>

        <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['correo']; ?></td>
            <td><?php echo $fila['rol']; ?></td>
        </tr>
        <?php } ?>

    </table>

    <br>

    <a href="inicio.php" class="boton">Volver al inicio</a>

    <br><br>

    <a href="logout.php" class="boton salir">Cerrar sesión</a>

</div>

</body>
</html>