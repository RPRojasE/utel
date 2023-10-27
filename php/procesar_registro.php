<?php
// Recopilar los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Realizar la lógica de registro
// En un caso real, aquí deberías verificar si el correo ya existe en la base de datos y aplicar medidas de seguridad.

// Conectar a la base de datos (ejemplo)
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión a la base de datos
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";

if ($conn->query($sql) === true) {
    echo "Registro exitoso. ¡Bienvenido, $nombre!";
} else {
    echo "Error en el registro: " . $conn->error;
}

$conn->close();
?>
