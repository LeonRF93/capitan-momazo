<?php
session_start(); // Inicia la sesión

// Verificar si el usuario está logueado
$isLoggedIn = isset($_SESSION['user_email']);
?>

<?php if (!$isLoggedIn): ?>
    $email = $_SESSION['user_email']; // Obtén el correo electrónico de la sesión
    <?php endif; ?>

<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Capitan Momazo</title>
    <link rel="icon" href="momo.ico" sizes="64x64" type="image/png">
    <link rel="stylesheet" href="css/tienda.css">
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
                <a href="compra.php"><h4 id="comprar">COMPRAR</h4></a>
            </div>
        </div>

    <header>
    <nav>
            <ul>
            <?php if (!$isLoggedIn): ?>
                                    <li><a href="login.php"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
                                <?php endif; ?>

                                <!-- Mostrar 'Cerrar sesión' si está logueado -->
                                <?php if ($isLoggedIn): ?>
                                    <li><a id="carrito" ><i class="fas fa-shopping-cart"></i> Carrito</a></li>
                                <?php endif; ?>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="tienda.php">Productos</a></li>
                <li><a href="index.php #quienes_somos">Quienes somos</a></li>
                <li><a href="index.php #contacto">Contacto</a></li>
                <?php if (!$isLoggedIn): ?>
                                    <li><a href="login.php">Iniciar sesión</a></li>
                                <?php endif; ?>

                                <!-- Mostrar 'Cerrar sesión' si está logueado -->
                                <?php if ($isLoggedIn): ?>
                                    <li><a href="logout.php">Cerrar sesión</a></li>
                                <?php endif; ?>
            </ul>
            <form method="get" action="tienda.php">
    <input type="text" name="producto" placeholder="Buscar producto..." required>
    <button type="submit">Buscar</button>
</form>
        </nav>
    </header>

    <section class="productos">
    <?php
    // Obtener el término de búsqueda
    $producto_buscar = isset($_GET['producto']) ? $_GET['producto'] : '';

    // Verificar si el término de búsqueda no está vacío antes de mostrar el mensaje
    if ($producto_buscar != '') {
        // Consulta SQL para obtener los productos que coinciden con el término de búsqueda
        $sql = "SELECT nombre_historieta, portada, precio, descripcion, year, editorial FROM historietas WHERE nombre_historieta LIKE '%$producto_buscar%' ORDER BY nombre_historieta ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar el resultado de la búsqueda
            echo "<h3 class='resultado'>Resultados para '" . htmlspecialchars($producto_buscar) . "'</h3>";

            // Recorrer los productos encontrados
            while ($producto = $result->fetch_assoc()) {
                echo "<div class='producto'>";
                // Mostrar la imagen del producto
                echo "<img src='" . $producto['portada'] . "' alt='" . $producto['nombre_historieta'] . "' class='producto-imagen'>";
                // Mostrar el nombre del producto
                echo "<h4>" . $producto['nombre_historieta'] . "</h4>";
                echo "<h5>$" . $producto['precio'] . "</h5>";

                if (!$isLoggedIn) {
                    echo "<button class='btn-añadir'>Añadir al carrito</button>";
                    echo "<a href='login.php' class='btn-añadir'>Más info.</a>";
                } else {
                    echo "<button class='btn-añadir' data-nombre='" . $producto['nombre_historieta'] . "' data-precio='" . $producto['precio'] . "'>Añadir al carrito</button>";
                    echo "<a href='producto.php?nombre=" . urlencode($producto['nombre_historieta']) . 
                    "&imagen=" . urlencode($producto['portada']) . 
                    "&precio=" . urlencode($producto['precio']) . 
                    "&descripcion=" . urlencode($producto['descripcion']) .
                    "&editorial=" . urlencode($producto['editorial']) . 
                    "&year=" . urlencode($producto['year']) . 
                    "' class='btn-añadir'>Más info.</a>";
                }
                echo "</div>";
            }
        } else {
            // Si no se encuentran productos
            echo "<h3 class='resultado'>Ningún resultado encontrado.</h3>";
        }
    }
    ?>
</section>



    <h3>Todos nuestros productos</h3>
    <section class="productos">
        <?php
        // Consulta SQL para obtener los nombres de los productos
        $sql = "SELECT nombre_historieta, portada, precio, descripcion, year, editorial FROM historietas ORDER BY nombre_historieta ASC";
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

                if (!$isLoggedIn) {
                    echo "<button class='btn-añadir'><a href='login.php'>Añadir al carrito</a></button>";
                    echo "<a href='login.php' class='btn-añadir'>Más info.</a>";
                } else {
                    echo "<button class='btn-añadir' data-nombre='" . $producto['nombre_historieta'] . "' data-precio='" . $producto['precio'] . "'>Añadir al carrito</button>";
                    echo "<a href='producto.php?nombre=" . urlencode($producto['nombre_historieta']) . 
                    "&imagen=" . urlencode($producto['portada']) . 
                    "&precio=" . urlencode($producto['precio']) . 
                    "&descripcion=" . urlencode($producto['descripcion']) .
                    "&editorial=" . urlencode($producto['editorial']) . 
                    "&year=" . urlencode($producto['year']) . 
                    "' class='btn-añadir'>Más info.</a>";
                }

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
