/* modal */

let cruzSalir = document.getElementsByClassName('close-button')
const carrito = document.getElementById('carrito');
let modalCarrito = document.getElementsByClassName('modal')

carrito.addEventListener('click', function () {

    modalCarrito[0].style.display = 'block'; // acordemonos que las clases suelen tener varios elementos, x eso pongo [0], aunque si solo va a haber un modal, lo ideal sería utilizar una id en vez de una clase

});

cruzSalir[0].addEventListener('click', function () {

    modalCarrito[0].style.display = 'none';

});

window.addEventListener('click', event => {

    if (event.target == modalCarrito[0] && event.target !== carrito) {
        modalCarrito[0].style.display = 'none';
    }
   

});

/* modal */


/* agergar producto */

document.addEventListener('DOMContentLoaded', () => {

        // Guardar el carrito en Local Storage
    function guardarCarritoEnLocalStorage() {
        localStorage.setItem('carrito', JSON.stringify(carritoArray));
    }

    // Cargar el carrito desde Local Storage
    function cargarCarritoDesdeLocalStorage() {
        const carritoGuardado = localStorage.getItem('carrito');
        if (carritoGuardado) {
            carritoArray.push(...JSON.parse(carritoGuardado));
            actualizarCarrito(); // Actualiza la interfaz del carrito con los datos cargados
        }
    }
    
    const carritoArray = [];
    const listaCarrito = document.getElementById('listaCarrito');
    const totalCarrito = document.getElementById('total');

    document.querySelectorAll('.btn-añadir').forEach((boton) => {
        boton.addEventListener('click', () => {
            const nombre = boton.getAttribute('data-nombre');
            const precio = parseFloat(boton.getAttribute('data-precio'));

            if (nombre && !isNaN(precio)) {
                const productoExistente = carritoArray.find(p => p.nombre === nombre);

                if (productoExistente) {
                    productoExistente.cantidad++;
                } else {
                    carritoArray.push({ nombre, precio, cantidad: 1 });
                }

                actualizarCarrito();
                guardarCarritoEnLocalStorage(); // Guarda el carrito actualizado
            } else {
                console.error('Error: datos inválidos', { nombre, precio });
            }
        });
    });

    function actualizarCarrito() {
        listaCarrito.innerHTML = '';
        let total = 0;

        carritoArray.forEach((producto, index) => {
            const li = document.createElement('li');
            li.className = 'carrito-item';

            // Contenido del producto
            const productoTexto = document.createElement('span');
            productoTexto.textContent = `${producto.nombre} - $${producto.precio} x${producto.cantidad}`;
            li.appendChild(productoTexto);

            // Botón para eliminar una unidad del producto
            const botonEliminar = document.createElement('button');
            botonEliminar.textContent = '❌';
            botonEliminar.className = 'btn-eliminar';
            botonEliminar.style.marginLeft = '10px';

            // Evento para restar una unidad del producto
            botonEliminar.addEventListener('click', () => {
                if (producto.cantidad > 1) {
                    producto.cantidad--; // Restar una unidad
                } else {
                    carritoArray.splice(index, 1); // Eliminar el producto si la cantidad es 0
                }
                actualizarCarrito(); // Actualizar el carrito
                guardarCarritoEnLocalStorage(); // Guarda el carrito actualizado
            });

            li.appendChild(botonEliminar);
            listaCarrito.appendChild(li);

            total += producto.precio * producto.cantidad;
        });

        totalCarrito.textContent = Math.round(total);
    }
    cargarCarritoDesdeLocalStorage();

    // Función para vaciar el carrito
    function vaciarCarrito() {
        carritoArray.length = 0; // Vaciar el array del carrito
        localStorage.removeItem('carrito'); // Eliminar el carrito del localStorage
        actualizarCarrito(); // Actualizar la interfaz
    }   

});


