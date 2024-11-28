<?php
include "../DB/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $opcion = $_POST['opcion'];
    if ($opcion === "Carrera") {
        $sql = $conexion->query("update carrera set activo='0' where id_carrera='$id'");
        if ($sql == 1) {
            header("location:../index.php?page=Cursos");
            exit();
        }
    } else if ($opcion === "Estudiante") {
        $activo = 0;
        $sql_datos = $conexion->prepare("UPDATE datos SET activo = ? WHERE id_datos = (SELECT id_datos FROM estudiante WHERE id_estudiante = ?)");
        $sql_datos->bind_param("ii", $activo, $id);

        if ($sql_datos->execute()) {
            $sql_estudiante = $conexion->prepare("UPDATE estudiante SET activo = ? WHERE id_estudiante = ?");
            $sql_estudiante->bind_param("ii", $activo, $id);

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