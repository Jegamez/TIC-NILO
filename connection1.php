<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tic_nilo";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$dependencia = $_POST['dependencia'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Insertar datos en la base de datos
$sql = "INSERT INTO registro_requimientos(nombre, cedula, dependencia, telefono, correo, mensaje)
VALUES ('$nombre', '$cedula', '$dependencia', '$telefono', '$correo', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
