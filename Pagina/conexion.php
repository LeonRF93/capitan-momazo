<?php
// Datos de la conexión
$servername = "localhost"; // o IP del servidor
$username = "root";        // usuario (en XAMPP/WAMP suele ser 'root')
$password = "";            // contraseña (vacío en XAMPP/WAMP)
$dbname = "capitan_momazo";     // nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
