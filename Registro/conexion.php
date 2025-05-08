<?php
// Datos de conexión
$host = "localhost";  // Cambia esto por el host de tu servidor de base de datos
$user = "root"; // Cambia esto por tu nombre de usuario de la base de datos
$password = ""; // Cambia esto por tu contraseña de la base de datos
$database = "registro"; // Cambia esto por el nombre de tu base de datos

// Establecer conexión
$conex = new mysqli($host, $user, $password, $database);

// Verificar si la conexión es exitosa
if ($conex->connect_error) {
    die("Error de conexión: " . $conex->connect_error);
}

// Establecer el conjunto de caracteres para evitar problemas de codificación
$conex->set_charset("utf8");

?>
