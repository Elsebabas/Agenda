<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "agenda";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$comp = $_POST["comp"];
$parentesco = $_POST["parentesco"];

$insertar = "INSERT INTO contacto (nombre, apellido, email, celular, comp, parentesco)
        VALUES ('$nombre', '$apellido', '$email', '$celular', '$comp', '$parentesco')";

if ($conn->query($insertar) === TRUE) {
    echo "Registro insertado correctamente<br>";
    echo '<br><a href="nuevo.php"><button>Regresar a Nuevo</button></a>';

}
else {
    echo "Error al insertar el registro: " . $conn->error;
    echo '<a href="nuevo.php"><button>Regresar a Nuevo</button></a>';

}

$conn->close();
?>
