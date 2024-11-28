<?php
include "../DB/conexion.php";
?>
<h2 class="text-center p-3 text-secondary">Agregar Estudiante</h2>
<form method="POST" action="Controlador/Crear.php" class="mb-3">
    <label for="primer_nombre" class="form-label">Primer Nombre</label>
    <input type="text" class="form-control" id="primer_nombre" name="primer_nombre"
        placeholder="Ingrese el primer nombre del estudiante" required>

    <label for="segundo_nombre" class="form-label">Segundo Nombre</label>
    <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre"
        placeholder="Ingrese el segundo nombre del estudiante">

    <label for="primer_apellido" class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" id="primer_apellido" name="primer_apellido"
        placeholder="Ingrese el primer apellido del estudiante" required>

    <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido"
        placeholder="Ingrese el segundo apellido del estudiante">

    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email"
        placeholder="Ingrese el correo electrónico del estudiante" required>

    <label for="carnet" class="form-label">Carnet</label>
    <input type="text" class="form-control" id="carnet" name="carnet" placeholder="Ingrese el carnet del estudiante"
        required>

    <label for="carrera" class="form-label">Carrera</label>
    <select class="form-select" id="carrera" name="carrera" required>
        <?php
        $sql = $conexion->query("SELECT * FROM carrera WHERE activo = 1;");
        while ($row = $sql->fetch_object()) {
            echo "<option value='{$row->id_carrera}'>{$row->nombre}</option>";
        }
        ?>
    </select>

    <input type="hidden" name="opcion" value="Estudiante">
    <button type="submit" class="btn btn-primary mt-2" name="btnGuardar" value="ok">Guardar</button>
</form>