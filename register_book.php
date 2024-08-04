<?php
$servername = "localhost";
$username = "root";
$password = "1911";
$dbname = "LIBRERIA";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$author = $_POST['author'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO LIBROS (título, autor, precio, cantidad) VALUES ('$title', '$author', '$price', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Registro de libro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
