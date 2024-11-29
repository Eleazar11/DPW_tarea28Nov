// Función para cargar una página dinámica en el contenido principal
function loadPage(page) {
    const content = document.getElementById('content');
    content.innerHTML = `<iframe src="./subpaginas/${page}.php""></iframe>`;
}

// Cargar la página de inicio por defecto
window.onload = () => loadPage('inicio');


