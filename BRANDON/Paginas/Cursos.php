<h2 class="text-center p-3 text-secondary">Carreras</h2>
<a class="btn btn-secondary col-6 my-2" data-bs-toggle="modal" data-bs-target="#editModal"
    onclick="ContenidoCrear()">Ingresar Carrera</a>

<section>
    <table class="table">
        <thead class="table-info">
            <tr>
                <th scope="col">Codigo carrera</th>
                <th scope="col">Nombre Carrera</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = $conexion->query("SELECT * FROM carrera WHERE activo = 1;");
            while ($datos = $sql->fetch_object()) {
                ?>
                <tr>
                    <th scope="row"><?= $datos->id_carrera ?></th>
                    <td><?= $datos->nombre ?></td>
                    <td>
                        <a href="#" class="btn btn-small btn-warning" data-bs-toggle="modal" data-bs-target="#editModal"
                            onclick="ContenidoModal(<?= $datos->id_carrera ?>)">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form method="POST" action="controlador/Eliminar.php" onsubmit="return confirmarEliminacion();"
                            style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $datos->id_carrera; ?>">
                            <input type="hidden" name="opcion" value="Carrera">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>

                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</section>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Modificar Curso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="ContenidoModificar">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e7588c0a12.js" crossorigin="anonymous"></script>
<script>
    function confirmarEliminacion() {
        return confirm("¿Estás seguro de que deseas eliminar este Curso?");
    }
    function ContenidoModal(id) {
        fetch(`Componentes/modalMCurso.php?id=${id}`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('ContenidoModificar').innerHTML = data;
            })
            .catch(error => {
                console.error('Error al cargar el modal:', error);
                document.getElementById('ContenidoModificar').innerHTML = '<p>Error al cargar los datos.</p>';
            });
    }
    function ContenidoCrear() {
        fetch(`Componentes/modalCCurso.php`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('ContenidoModificar').innerHTML = data;
            })
            .catch(error => {
                console.error('Error al cargar el modal:', error);
                document.getElementById('ContenidoModificar').innerHTML = '<p>Error al cargar los datos.</p>';
            });
    }
</script>