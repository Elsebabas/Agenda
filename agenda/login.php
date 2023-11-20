<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $usuario = $_POST["usuario"];
    $contra = $_POST["contra"];


    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "agenda";

    $conn = new mysqli($server, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contra='$contra'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso
        $_SESSION["usuario"] = $usuario;
        header("Location: panel_admin.php");
        exit();
    } else {
        // Credenciales incorrectas
        echo "Usuario o contraseña incorrectos.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styleslista.css">
  <title>LOGIN</title>
</head>
<body>
<header><h1>AGENDA TELEFÓNICA</h1></header>
  <div class="new"><h2>LOGIN PANEL ADMINISTRATIVO</h2><hr></div>
  <a href="panel_admin.php">Inicio</a><br>
  <div class="login">
    <form action="login.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        
        <label for="contra">Contraseña:</label>
        <input type="password" id="contra" name="contra" required>

        <input type="submit" value="Acceder contacto">
    </form>
  </div>
</body>
</html>