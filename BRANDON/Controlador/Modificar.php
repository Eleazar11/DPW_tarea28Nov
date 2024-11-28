<?php
include "../DB/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $opcion = $_POST['opcion'];
    if ($opcion === "Carrera") {
        $nombre = $_POST['nombre'];
        $sql = $conexion->query("update carrera set nombre='$nombre' where id_carrera='$id'");
        if ($sql == 1) {
            header("location:../index.php?page=Cursos");
            exit();
        }
    } else if ($opcion === "Estudiante") {
        $primer_nombre = $_POST['primer_nombre'];
        $segundo_nombre = $_POST['segundo_nombre'];
        $primer_apellido = $_POST['primer_apellido'];
        $segundo_apellido = $_POST['segundo_apellido'];
        $email = $_POST['email'];
        $carnet = $_POST['carnet'];
        $id_carrera = $_POST['carrera'];
        $sql_datos = $conexion->prepare("UPDATE datos SET 
        primer_nombre = ?, 
        segundo_nombre = ?, 
        primer_apellido = ?, 
        segundo_apellido = ?, 
        email = ? 
        WHERE id_datos = (SELECT id_datos FROM estudiante WHERE id_estudiante = ?)");
        $sql_datos->bind_param("sssssi", $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $email, $id);
        if ($sql_datos->execute()) {
            $sql_estudiante = $conexion->prepare("UPDATE estudiante SET 
                 id_carrera = ?, 
                 carnet = ? 
                 WHERE id_estudiante = ?");
            $sql_estudiante->bind_param("isi", $id_carrera, $carnet, $id);

            if ($sql_estudiante->execute()) {
                header("location:../index.php?page=Estudiante");
                exit();
            }
        }
    }
    header("location:../index.php");
    echo '<script>alert("Error al modificar");</script>';
}
?>