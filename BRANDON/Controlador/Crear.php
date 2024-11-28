<?php
include "../DB/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $opcion = $_POST['opcion'];
    if ($opcion === "Carrera") {
        $nombre = $_POST['nombre'];
        $sql = $conexion->query("INSERT INTO carrera (nombre) VALUES ('$nombre')");
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
        $sql_datos = $conexion->prepare("INSERT INTO Datos (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, email) 
                                         VALUES (?, ?, ?, ?, ?)");
        $sql_datos->bind_param("sssss", $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $email);
        if ($sql_datos->execute()) {
            $id_datos = $conexion->insert_id;
            $sql_estudiante = $conexion->prepare("INSERT INTO Estudiante (id_datos, id_carrera, carnet, activo) 
                                                  VALUES (?, ?, ?, 1)");
            $sql_estudiante->bind_param("iis", $id_datos, $id_carrera, $carnet);
            if ($sql_estudiante->execute()) {
                header("location:../index.php?page=Estudiante");
                exit();
            }
        }

    }
    header("location:../index.php");
    echo '<script>alert("Error al crear");</script>';
}
?>