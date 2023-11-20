<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "agenda";

// Crea la conexión
$conn = new mysqli($server, $user, $pass, $db);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Prepara la consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM contacto";
$result = $conn->query($sql);

// Cierra la conexión si no hay resultados
if (!$result) {
    die("Error al obtener datos: " . $conn->error);
}

// Cierra la conexión si no hay resultados
if ($result->num_rows > 0) {
    // Muestra la tabla HTML
    echo 
    "<html>
        <head>  
        <style>table {border-collapse: collapse; width: 100%;} th, td {border: 1px solid #ddd; padding: 8px; text-align: left;} th {background-color: #75061D; color: white;}*{
  margin: 0;
  padding: 0;
  font-family:Arial, Helvetica, sans-serif
}

header{
  color: white;
  background-color: rgb(82, 80, 80);
  text-align: center;
  padding: 15px;
}

h1{
  font-size: 60px;
}

.new{
  padding: 20px;
}

h2{
  color: orange;
  font-size: 20px;
}

hr{
  width: 85%;
  height: 1px;
  background-color: lightgray;
}

a{
  margin-left: 50px;
}

.tabla{
  margin: 20px;
}</style>
        </head>
        <body>";
    echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Celular</th><th>Compañía</th><th>Parentesco</th></tr>";

    // Muestra los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["apellido"]. "</td><td>" . $row["email"]. "</td><td>" . $row["celular"]. "</td><td>" . $row["comp"]. "</td><td>" . $row["parentesco"]. "</td></tr>";
    }

    echo "</table></body></html>";
} else {
    echo "No se encontraron resultados.";
}

// Cierra la conexión
$conn->close();
?>

