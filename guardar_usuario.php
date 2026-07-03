<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = hash('sha256', $_POST['password']);
$rol = $_POST['rol'];

$verificar = "SELECT * FROM usuarios WHERE correo='$correo'";
$resultado = mysqli_query($conexion, $verificar);

if(mysqli_num_rows($resultado) > 0){
    echo "El correo ya se encuentra registrado.";
    exit();
}

$sql = "INSERT INTO usuarios(nombre, correo, password, rol)
        VALUES('$nombre','$correo','$password','$rol')";

if(mysqli_query($conexion, $sql)){
    echo "Usuario registrado correctamente.<br><br>";
    echo "<a href='index.php'>Ir al inicio de sesión</a>";
}else{
    echo "Error al registrar usuario.";
}
?>