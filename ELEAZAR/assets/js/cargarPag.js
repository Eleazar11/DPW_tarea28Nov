function loadPage(page) {
    const content = document.getElementById('content');
    content.innerHTML = `<iframe src="./subpaginas/${page}.php" frameborder="0" style="width: 100%; height: calc(100vh - 32px);"></iframe>`;
}


// Cargar la página de inicio por defecto
window.onload = () => loadPage('inicio');
