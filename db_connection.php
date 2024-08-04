<?php
$servername = "localhost";
$username = "root";
$password = "1911";
$dbname = "LIBRERIA";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
