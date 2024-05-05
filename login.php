<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosL.css">
    <title>Incio de Sesion</title>
</head>
<body>
<section>
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="post">
      <label for="username">Correo o Usuario:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Iniciar Sesión">
    </form>
    <a href="register.php">Registrarme</a>
  </section>
</body>
</html>

<!--?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: login.php");
    exit; // Asegúrate de salir del script después de la redirección
}else {
    // Si no se ha enviado el formulario, redireccionar al usuario a alguna otra página
    header("Location: login.php");
    exit;
}