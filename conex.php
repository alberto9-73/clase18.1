<?php
// Configuración de la conexión a la base de datos
$servername = 'localhost'; // Nombre del servidor MySQL
$username = 'root'; // Nombre de usuario de MySQL
$password = ''; // Contraseña de MySQL
$dbname = 'usuario'; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die('Conexión fallida: ' . $conn->connect_error);
}
?>