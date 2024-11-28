<?php
include "../DB/conexion.php";

$id = $_GET["id"] ?? null;

if ($id) {
    $sql = $conexion->query("SELECT * FROM carrera WHERE id_carrera='$id'");
    if ($datos = $sql->fetch_object()) {
        ?>

        <form method="POST" action="Controlador/Modificar.php" class="mb-3">
            <input type="hidden" name="id" id="id" value="<?= $id ?>">
            <label for="nombrep" class="form-label">Nombre del Curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $datos->nombre ?>"
                placeholder="Ingrese un producto">
            <input type="hidden" name="opcion" value="Carrera">
            <button type="submit" class="btn btn-primary mt-2" name="btnModificar" value="ok">Modificar</button>
        </form>

        <?php
    } else {
        echo '<p>curso no encontrado.</p>';
    }
} else {
    echo '<p>ID no especificado.</p>';
}
?>