<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../../modelo/conexion.php';

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
            echo json_encode(['success' => true, 'message' => 'Estudiante registrado correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al registrar al estudiante.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Todos los campos son obligatorios.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
}
