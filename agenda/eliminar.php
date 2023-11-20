<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "agenda";

// Recupera el ID del registro a eliminar
$id = $_GET['id'];

// Crea la conexión
$conn = new mysqli($server, $user, $pass, $db);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Prepara la consulta SQL para eliminar el registro
$sql = "DELETE FROM contacto WHERE id = $id";
$result = $conn->query($sql);

// Cierra la conexión
$conn->close();

// Redirecciona a la página principal después de eliminar
header("Location: ver_lista.php");
exit();
?>
