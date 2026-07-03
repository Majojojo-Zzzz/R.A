<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="contenedor">

    <h2>Iniciar Sesión</h2>
    <h2> Hola </h2>

    <form action="validar.php" method="POST">

        <div class="input-group">
            <label>Correo</label>
            <input type="email" name="correo" required>
        </div>

        <div class="input-group">
            <label>Contraseña</label>

            <div class="password-container">
                <input type="password" name="password" id="password" required>

                <i class="fa-solid fa-eye-slash"
                   id="togglePassword"
                   onclick="mostrarPassword()">
                </i>
            </div>
        </div>

        <button type="submit">Ingresar</button>

        <div class="link">
            <p>¿No tienes cuenta?</p>
            <a href="registro.php">Registrarse</a>
        </div>

    </form>

</div>

<script>
function mostrarPassword() {
    const password = document.getElementById("password");
    const icon = document.getElementById("togglePassword");

    if(password.type === "password"){
        password.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }else{
        password.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }
}
</script>

</body>
</html>
