<?php
session_start();
include("conexion.php");

$correo = $_POST['correo'];
$password = hash('sha256', $_POST['password']);

$sql = "SELECT * FROM usuarios
        WHERE correo='$correo'
        AND password='$password'";

$resultado = mysqli_query($conexion, $sql);

if(mysqli_num_rows($resultado) > 0){

    $usuario = mysqli_fetch_assoc($resultado);

    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['correo'] = $usuario['correo'];
    $_SESSION['rol'] = $usuario['rol'];

    header("Location: inicio.php");

}else{
    echo "Correo o contraseña incorrectos";
}
?>