<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styleslista.css">
  <title>VER LISTA</title>
</head>
<body>
<header><h1>AGENDA TELEFÓNICA</h1></header>
  <div class="new">
    <h2>VER LISTA</h2>    
    <hr>
  </div>
  <a href="panel_admin.php">Inicio</a>
  <div class="tabla">
    <?php
      include "modificar_lista.php";
    ?>
  </div>
  <br>
  <form action="cerrar_sesion.php" method="post">
      <button type="submit" style="color: white; background-color: red; border: none; padding: 5px 10px; cursor: pointer;margin: 25px;">Cerrar Sesión</button>
    </form>
</body>
</html>