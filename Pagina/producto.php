<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="momo.ico" sizes="64x64" type="image/png">
    <link rel="stylesheet" href="css/producto.css">
</head>
<body>

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

<?php
    include 'conexion.php'; // Conecta el archivo a la base de datos
    ?>

<header>
    <nav>
            <ul>
                <li><a id="carrito" ><i class="fas fa-shopping-cart"></i> Carrito</a></li>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="tienda.php">Productos</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <?php
    // Recuperar los datos del producto enviados por GET
    $nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : 'Producto';
    $imagen = isset($_GET['imagen']) ? htmlspecialchars($_GET['imagen']) : 'default-image.jpg';
    $precio = isset($_GET['precio']) ? htmlspecialchars($_GET['precio']) : '0.00';
    $descripcion = isset($_GET['descripcion']) ? htmlspecialchars($_GET['descripcion']) : 'No hay descripción disponible.';
    $editorial = isset($_GET['editorial']) ? htmlspecialchars($_GET['editorial']) : 'Producto';
    $year = isset($_GET['year']) ? htmlspecialchars($_GET['year']) : '0.00';
    ?>
    <div class="product-page">
        <div class="product-image">
            <img src="<?php echo $imagen; ?>" alt="<?php echo $nombre; ?>">
        </div>
        <div class="product-info">
            <h1><?php echo $nombre; ?></h1>
            <p class="year"><?php echo $year; ?></p>
            <h4>Editorial: <?php echo $editorial; ?></h4>
            <p class="description"><?php echo $descripcion; ?></p>
            <p class="price">$<?php echo $precio; ?></p>
            <button class="btn-añadir" data-nombre="<?php 
            echo $nombre; ?>" data-precio="<?php echo $precio; 
            ?>">
    Añadir al carrito
</button>
            </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
