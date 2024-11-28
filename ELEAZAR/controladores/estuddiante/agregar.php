<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../../../modelo/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST["nombrep"])){
    $nombretipoP=($_POST["nombrep"]);
    $sql=$conexion->query("insert into tipoproducto (NombreTipoProducto, Estado) values('$nombretipoP',1)");
    if($sql==1) header("Location: ../index.php?a_success=1");
    else header("Location: ../index.php?a_success=0");
} else header("Location: ../index.php?a_success=0");

?>