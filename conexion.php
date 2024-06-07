<?php
// Configuración de la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "root";
$base_datos = "Keymasters";

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
