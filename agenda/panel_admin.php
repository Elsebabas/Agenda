<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="css/stylesindex.css">
  <title>AGENDA TELEFÓNICA</title>
</head>
<body class="body">
  <header><h1>AGENDA TELEFÓNICA</h1></header>
  <nav class="nav-links">
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="nuevo.php">Nuevo</a></li>
      <li><a href="lista_admin.php">Ver lista</a></li>
    </ul>
  </nav>
  <div class="logo">
      <img src="imagenes/merida.png" alt="logo">
  </div>
  <form action="cerrar_sesion.php" method="post">
      <button type="submit" style="color: white; background-color: red; border: none; padding: 5px 10px; cursor: pointer;margin: 25px;">Cerrar Sesión</button>
    </form>
  <h2>EJEMPLO DE AGENDA TELEFÓNICA</h2><br>
  <h3>MARTIN SEBASTIAN MARTÍNEZ SÁNCHEZ 7SB</h3><br>
  <footer>www.itmerida.mx</footer>
</body>
</html>

