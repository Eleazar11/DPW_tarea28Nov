function loadPage(page) {
    fetch(`subpaginas/${page}.php`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('content').innerHTML = data;

            // Ejecuta los scripts en la nueva subpágina
            const scripts = document.getElementById('content').getElementsByTagName('script');
            for (let script of scripts) {
                eval(script.innerHTML); // Ejecuta el código del script
            }
        });
}



// Cargar la página de inicio por defecto
window.onload = () => loadPage('inicio');
