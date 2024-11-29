<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../../modelo/conexion.php'; // Ruta correcta hacia conexion.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $carnet = $_POST['carnet'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $carrera = $_POST['carrera'] ?? '';

    if (!empty($nombre) && !empty($apellidos) && !empty($carnet) && !empty($correo) && !empty($carrera)) {
        $sql = $conexion->prepare("INSERT INTO Estudiantes (nombre, apellidos, carnet, correo, carrera) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param("sssss", $nombre, $apellidos, $carnet, $correo, $carrera);

        if ($sql->execute()) {
            header("Location: ../../inicio");
        } else {
        //    header("Location: ../../index.php?a_success=0");
        }
    } else {
       // header("Location: ../../index.php?a_success=0");
    }
} else {
    //header("Location: ../../index.php?a_success=0");
}
