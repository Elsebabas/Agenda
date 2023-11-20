<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/stylesnew.css">
  <title>Nuevo contacto</title>
</head>
<body>
  <header><h1>AGENDA TELEFÓNICA</h1></header>
  <div class="new"><h2>NUEVO CONTACTO</h2><hr></div>
  <a href="panel_admin.php">Inicio</a>
  <div class="formulario">
  <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="celular">Celular:</label>
        <input type="tel" id="celular" name="celular" required>
        <br>
        <label>Compañía:</label>
        <input type="radio" name="comp" value="telcel">
        <label for="comp1">TELCEL</label>
        <input type="radio" name="comp" value="at&t">
        <label for="comp2">AT&T</label>
        <input type="radio" name="comp" value="movistar">
        <label for="comp3">MOVISTAR</label>
        <br>
        <label for="parentesco">Parentesco:</label>
        <select id="parentesco" name="parentesco" required >
            <option value="escuela">Escuela</option>
            <option value="familia">Familia</option>
            <option value="amigo">Amigo</option>
            <option value="conocido">Conocido</option>
        </select>
        <br>
        <button type="submit" value="Enviar">Guardar contacto</button>
        <button type="reset" value="Borrar">Borrar datos</button>
    </form>
    </div>

</body>
</html>