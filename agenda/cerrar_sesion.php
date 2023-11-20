<?php
session_start();

// Destruye todas las variables de sesión
session_destroy();

// Redirige al formulario de inicio de sesión (puedes cambiar la URL según tus necesidades)
header("Location: index.php");
exit();
?>
