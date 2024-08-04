<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);
    $dirección = $_POST["dirección"];
    $teléfono = $_POST["teléfono"];

    $sql = "INSERT INTO USUARIOS (nombre, email, contraseña, dirección, teléfono)
            VALUES ('$nombre', '$email', '$contraseña', '$dirección', '$teléfono')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
</head>
<body>
    <form method="post" action="register.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br>
        <label for="dirección">Dirección:</label>
        <input type="text" id="dirección" name="dirección" required><br>
        <label for="teléfono">Teléfono:</label>
        <input type="text" id="teléfono" name="teléfono"><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
