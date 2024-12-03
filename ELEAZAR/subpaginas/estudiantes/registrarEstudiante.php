<section class="mt-5">
    <div class="container">
        <h2 class="mb-4">Registrar Estudiante</h2>
        <form id="form-registrar">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <div class="mb-3">
                <label for="carnet" class="form-label">Carnet</label>
                <input type="text" class="form-control" id="carnet" name="carnet" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
                <label for="carrera" class="form-label">Carrera</label>
                <input type="text" class="form-control" id="carrera" name="carrera" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Estudiante</button>
        </form>
    </div>
</section>

<!-- Modal de Confirmación -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Registro Exitoso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        El estudiante ha sido registrado correctamente.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Agregar Bootstrap JS, Popper.js y Script de Envío -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    document.getElementById('form-registrar').addEventListener('submit', function (e) {
        e.preventDefault(); // Evita el envío tradicional del formulario

        const formData = new FormData(this); // Obtiene los datos del formulario

        fetch('../../controladores/estudiante/registrar.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Convierte la respuesta a JSON
        .then(data => {
            if (data.success) {
                // Muestra el modal de éxito
                const modal = new bootstrap.Modal(document.getElementById('successModal'));
                modal.show();
                // Limpia los campos del formulario
                this.reset();
            } else {
                // Muestra un mensaje de error
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Ocurrió un error inesperado.');
        });
    });
</script>
