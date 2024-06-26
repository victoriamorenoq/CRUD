<?php
$servername = "localhost";
$username = "CH40";
$password = "Pa$$w0rd";
$dbname = "Menu";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>