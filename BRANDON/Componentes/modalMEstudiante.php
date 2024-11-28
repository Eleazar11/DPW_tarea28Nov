<?php
include "../DB/conexion.php";

$id = $_GET["id"] ?? null;

if ($id) {
    $sql = $conexion->query("SELECT e.id_estudiante, d.primer_nombre, d.segundo_nombre, d.primer_apellido, d.segundo_apellido, d.email, e.carnet 
                                            FROM Estudiante e 
                                            JOIN Datos d ON e.id_datos = d.id_datos 
                                            WHERE e.activo = 1 AND d.activo = 1");
    if ($datos = $sql->fetch_object()) {
        ?>
        <form method="POST" action="Controlador/Modificar.php" class="mb-3">
            <label for="primer_nombre" class="form-label">Primer Nombre</label>
            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre"
                placeholder="Ingrese el primer nombre del estudiante" value="<?= $datos->primer_nombre ?>" required>

            <label for="segundo_nombre" class="form-label">Segundo Nombre</label>
            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre"
                placeholder="Ingrese el segundo nombre del estudiante" value="<?= $datos->segundo_nombre ?>">

            <label for="primer_apellido" class="form-label">Primer Apellido</label>
            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido"
                placeholder="Ingrese el primer apellido del estudiante" value="<?= $datos->primer_apellido ?>" required>

            <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido"
                placeholder="Ingrese el segundo apellido del estudiante" value="<?= $datos->segundo_apellido ?>">

            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                placeholder="Ingrese el correo electrónico del estudiante" value="<?= $datos->email ?>" required>

            <label for="carnet" class="form-label">Carnet</label>
            <input type="text" class="form-control" id="carnet" name="carnet" value="<?= $datos->carnet ?>"
                placeholder="Ingrese el carnet del estudiante" required>

            <label for="carrera" class="form-label">Carrera</label>
            <select class="form-select" id="carrera" name="carrera" required>
                <?php
                $sql = $conexion->query("SELECT * FROM carrera WHERE activo = 1;");
                while ($row = $sql->fetch_object()) {
                    echo "<option value='{$row->id_carrera}'>{$row->nombre}</option>";
                }
                ?>
            </select>
            <input type="hidden" name="id" id="id" value="<?= $id ?>">
            <input type="hidden" name="opcion" value="Estudiante">
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