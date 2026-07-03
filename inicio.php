<?php
session_start();

if(!isset($_SESSION['correo'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="contenedor">

    <h2>Bienvenido</h2>
    <h2> Primer cambio</h2> 

    <h3><?php echo $_SESSION['nombre']; ?></h3>

    <p><strong>Correo:</strong> <?php echo $_SESSION['correo']; ?></p>

    <p><strong>Rol:</strong> <?php echo $_SESSION['rol']; ?></p>

    <br>

    <a href="usuarios.php" class="boton">Ver usuarios registrados</a>

    <br><br>

    <a href="logout.php" class="boton salir">Cerrar sesión</a>

</div>

</body>
</html>
