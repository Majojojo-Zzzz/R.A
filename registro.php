<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="contenedor">

    <h2>Registrar Usuario</h2>

    <form action="guardar_usuario.php" method="POST">

        <div class="input-group">
            <label>Nombre</label>
            <input type="text" name="nombre" required>
        </div>

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

        <div class="input-group">
            <label>Rol</label>

            <select name="rol" required>
                <option value="Administrador">Administrador</option>
                <option value="Usuario">Usuario</option>
            </select>
        </div>

        <button type="submit">Registrar</button>

        <div class="link">
            <a href="index.php">Volver al inicio de sesión</a>
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