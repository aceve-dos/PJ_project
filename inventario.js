// inventario_script.js
document.addEventListener('DOMContentLoaded', function() {
    // Obtén el elemento "Agregar Bien Inmueble"
    const addInmuebleTitle = document.querySelector('.add-item h2');

    // Agregar un controlador de eventos para el evento "mouseenter"
    addInmuebleTitle.addEventListener('mouseenter', function() {
        // Cambia el cursor a indicar que el título es clickeable
        addInmuebleTitle.style.cursor = 'pointer';
    });

    // Agregar un controlador de eventos para el clic en el título
    addInmuebleTitle.addEventListener('click', function() {
        // Redirige a la página del formulario de Bien Inmueble
        window.location.href = 'agregar_ingreso.html';
    });
});
