<h2 class="text-center p-3 text-secondary">Agregar Carrera</h2>
<form method="POST" action="Controlador/Crear.php" class="mb-3">
    <label for="nombrep" class="form-label">Nombre del Curso</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del curso">
    <input type="hidden" name="opcion" value="Carrera">
    <button type="submit" class="btn btn-primary mt-2" name="btnModificar" value="ok">Guardar</button>
</form>