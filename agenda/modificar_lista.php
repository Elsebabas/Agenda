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

// Muestra la tabla HTML
echo "<html><head><style>table {border-collapse: collapse; width: 100%;} th, td {border: 1px solid #ddd; padding: 8px; text-align: left;} th {background-color: #75061D; color: white;}
</style></head><body>";
echo "
<table><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Celular</th><th>Compañía</th><th>Parentesco</th><th>Eliminar</th></tr>";

// Muestra los datos de cada fila
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["apellido"]. "</td><td>" . $row["email"]. "</td><td>" . $row["celular"]. "</td><td>" . $row["comp"]. "</td><td>" . $row["parentesco"]. "</td>";
    
    // Agregar la columna "Eliminar"
    echo '<td><a href="eliminar.php?id=' . $row["id"] . '">Eliminar</a></td>';
    
    echo "</tr>";
}

echo "</table></body></html>";

// Cierra la conexión
$conn->close();
?>