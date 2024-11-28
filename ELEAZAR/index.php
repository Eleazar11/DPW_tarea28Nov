<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Tesis - CUNOC</title>
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-dark text-white p-3" style="width: 250px; height: 100vh; position: fixed;">
            <h3 class="text-center py-3">Panel Administrador</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" onclick="loadPage('inicio')">Inicio</a>
                </li>
                <!-- Estudiantes -->
        <li class="nav-item">
            <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#estudiantesSubmenu" aria-expanded="false" aria-controls="estudiantesSubmenu">Estudiantes</a>
            <div class="collapse" id="estudiantesSubmenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('estudiantes/registrarEstudiante')">Registrar Estudiante</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('estudiantes/verEstudiantes')">Ver Estudiantes</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('estudiantes/modificarEstudiante')">Modificar Estudiante</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('estudiantes/eliminarEstudiante')">Eliminar Estudiante</a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- Asesores -->
        <li class="nav-item">
            <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#asesoresSubmenu" aria-expanded="false" aria-controls="asesoresSubmenu">Asesores</a>
            <div class="collapse" id="asesoresSubmenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('asesores/registrarAsesor')">Registrar Asesor</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('asesores/verAsesores')">Ver Asesores</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('asesores/modificarAsesor')">Modificar Asesor</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('asesores/eliminarAsesor')">Eliminar Asesor</a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- Tesis -->
        <li class="nav-item">
            <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#tesisSubmenu" aria-expanded="false" aria-controls="tesisSubmenu">Tesis</a>
            <div class="collapse" id="tesisSubmenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('tesis/registrarTesis')">Registrar Tesis</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('tesis/verTesis')">Ver Tesis</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('tesis/modificarTesis')">Modificar Tesis</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('tesis/eliminarTesis')">Eliminar Tesis</a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- Avances -->
        <li class="nav-item">
            <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#avancesSubmenu" aria-expanded="false" aria-controls="avancesSubmenu">Avances</a>
            <div class="collapse" id="avancesSubmenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('avances/registrarAvance')">Registrar Avance</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('avances/verAvances')">Ver Avances</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('avances/modificarAvance')">Modificar Avance</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('avances/eliminarAvance')">Eliminar Avance</a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- Incidentes -->
        <li class="nav-item">
            <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#incidentesSubmenu" aria-expanded="false" aria-controls="incidentesSubmenu">Incidentes</a>
            <div class="collapse" id="incidentesSubmenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('incidentes/registrarIncidente')">Registrar Incidente</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('incidentes/verIncidentes')">Ver Incidentes</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('incidentes/modificarIncidente')">Modificar Incidente</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="loadPage('incidentes/eliminarIncidente')">Eliminar Incidente</a>
                    </li>
                </ul>
            </div>
        </li>
            </ul>
        </div>

        <!-- Contenido dinámico -->
        <div id="content" class="p-4" style="margin-left: 250px; width: calc(100% - 250px);">
            <!-- Aquí se cargará el contenido dinámico -->
        </div>
    </div>

    <script>
        function loadPage(page) {
            const content = document.getElementById('content');
            content.innerHTML = `<iframe src="./subpaginas/${page}.php" frameborder="0" style="width: 100%; height: 100%;"></iframe>`;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
