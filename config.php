<?php
$servername = "localhost";
$username = "root"; // o tu nombre de usuario
$password = ""; // o tu contraseña
$dbname = "pedidos";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
