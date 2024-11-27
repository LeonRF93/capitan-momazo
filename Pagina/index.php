<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Capitan Momazo</title>
    <link rel="icon" href="momo.ico" sizes="64x64" type="image/png">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
    include 'conexion.php'; // Conecta el archivo a la base de datos
    ?>
    
    <div class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <!-- Un span no comienza en una nueva línea y solo ocupa el ancho necesario para su contenido. Esto lo diferencia de los
            elementos de bloque como <div>, que ocupan todo el ancho disponible. -->
                <h2 id="itemsAbajo">Productos añadidos:</h2>
                <ul id="listaCarrito"></ul>
                <div class="contTotal">
                <p>TOTAL:&nbsp<p><div id="totalTexto">$</div>
                    <div id="total">
                        <p>0</p>
                    </div>
                </div>
                <h4 id="comprar">COMPRAR</h4>
            </div>
        </div>

    <header>
    <nav>
            <ul>
                <li><a id="carrito" ><i class="fas fa-shopping-cart"></i> Carrito</a></li>
                <li><a href="#">Inicio</a></li>
                <li><a href="tienda.php">Productos</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        <div class="logo">
            <img src="img/logo.png" alt="momazo logo">
            <h1>&nbsp;CAPITAN MOMAZO</h1>
        </div>
        <br>
    </header>

    <section class="hero">
        <!-- Comentado: <h2>Bienvenidos a Nuestra Tienda</h2><p>Encuentra lo mejor aquí</p> -->
    </section>

    <h3>Nuestros Productos</h3>
    <section class="productos">
        <?php
        // Consulta SQL para obtener los nombres de los productos
        $sql = "SELECT nombre_historieta, portada, precio FROM historietas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Recorremos los productos
            while ($producto = $result->fetch_assoc()) {
                echo "<div class='producto'>";
                // Mostrar la imagen del producto
                echo "<img src='" . $producto['portada'] . "' alt='" . $producto['nombre_historieta'] . "' class='producto-imagen'>"; 
                // Mostrar el nombre del producto
                echo "<h4>" . $producto['nombre_historieta'] . "</h4>";
                echo "<h5>$" . $producto['precio'] . "</h5>";
                echo "<button class='btn-añadir' data-nombre='" . $producto['nombre_historieta'] . "' data-precio='" . $producto['precio'] . "'>Añadir al carrito</button>";
                echo "<button class='btn-añadir'>Mas info.</button>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay productos disponibles.</p>";
        }
        
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Capitan Momazo - Todos los derechos reservados</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
