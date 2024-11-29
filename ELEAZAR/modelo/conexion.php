<?php
$conexion = new mysqli("127.0.0.1", "root", "", "cunoc", 3306);
$conexion->set_charset("utf8");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>