<?php
$servername = "localhost";
$username = "root";
$password = "1911";
$dbname = "LIBRERIA";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM LIBROS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Título: " . $row["título"]. " - Autor: " . $row["autor"]. " - Precio: $" . $row["precio"]. "<br>";
    }
} else {
    echo "No se encontraron libros";
}

$conn->close();
?>
