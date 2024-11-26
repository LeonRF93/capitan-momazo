<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitan Momazo</title>
    <link rel="icon" href="momo.ico" sizes="64x64" type="image/png">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include 'conexion.php'; // Conecta el archivo a la base de datos
    ?>
    
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="momazo logo">
            <h1>&nbsp;CAPITAN MOMAZO</h1>
        </div>
        <br>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <!-- Comentado: <h2>Bienvenidos a Nuestra Tienda</h2><p>Encuentra lo mejor aquí</p> -->
    </section>

    <h3>Nuestros Productos</h3>
    <section class="productos">
        <?php
        // Consulta SQL para obtener los nombres de los productos
        $sql = "SELECT nombre_historieta, portada FROM historietas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Recorremos los productos
            while ($producto = $result->fetch_assoc()) {
                echo "<div class='producto'>";
                // Mostrar la imagen del producto
                echo "<img src='" . $producto['portada'] . "' alt='" . $producto['nombre_historieta'] . "' class='producto-imagen'>"; 
                // Mostrar el nombre del producto
                echo "<h4>" . $producto['nombre_historieta'] . "</h4>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay productos disponibles.</p>";
        }
        
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Mi E-Commerce - Todos los derechos reservados</p>
    </footer>
</body>
</html>
