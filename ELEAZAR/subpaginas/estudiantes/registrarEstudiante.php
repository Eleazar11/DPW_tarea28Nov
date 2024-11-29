<form action="../../controladores/estudiante/registrar.php" method="POST">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos:</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
    </div>
    <div class="mb-3">
        <label for="carnet" class="form-label">Carnet:</label>
        <input type="text" class="form-control" id="carnet" name="carnet" required>
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">Correo:</label>
        <input type="email" class="form-control" id="correo" name="correo" required>
    </div>
    <div class="mb-3">
        <label for="carrera" class="form-label">Carrera:</label>
        <input type="text" class="form-control" id="carrera" name="carrera" required>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
