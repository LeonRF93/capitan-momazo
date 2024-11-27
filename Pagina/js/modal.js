document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modal-carrito'); // Modal
    const carritoLink = document.querySelector('.carrito-link'); // Enlace del carrito
    const cerrarBtn = document.querySelector('.cerrar'); // Botón de cerrar

    // Mostrar el modal al hacer clic en el carrito
    carritoLink.addEventListener('click', (e) => {
        e.preventDefault(); // Evita que el enlace recargue la página
        modal.style.display = 'flex'; // Cambia el estilo del modal para mostrarlo
    });

    // Cerrar el modal al hacer clic en el botón de cerrar
    cerrarBtn.addEventListener('click', () => {
        modal.style.display = 'none'; // Cambia el estilo del modal para ocultarlo
    });

    // Cerrar el modal al hacer clic fuera del contenido del modal
    window.addEventListener('click', (e) => {
        if (e.target === modal) { // Verifica si se hizo clic fuera del modal
            modal.style.display = 'none';
        }
    });
});
