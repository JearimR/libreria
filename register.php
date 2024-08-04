<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LIBRERIA";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$address = $_POST['address'];
$phone = $_POST['phone'];

$sql = "INSERT INTO USUARIOS (nombre, email, contraseña, dirección, teléfono) VALUES ('$name', '$email', '$password', '$address', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Registro de usuario exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
