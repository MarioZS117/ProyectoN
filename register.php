<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="estilosR.css">
</head>
<body>
    <div class="container">
        <h1>Registro de Usuario</h1>
        <form action="registro.php" method="POST">
            <label for="username">Nombre de Usuario:</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="role">Rol en la Empresa:</label><br>
            <input type="text" id="role" name="role" required><br><br>

            <label for="curp">CURP:</label><br>
            <input type="text" id="curp" name="curp" required><br><br>

            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>