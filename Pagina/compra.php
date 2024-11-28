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

<script>
    // Vaciar el carrito en localStorage antes de redirigir
    localStorage.removeItem('carrito');
    console.log("Carrito vaciado exitosamente.");
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="momo.ico" sizes="64x64" type="image/png">
    <title>Gracias por su compra</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/compra.css">
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
        </nav>
    </header>

    <div class="container">
        <h1>¡Gracias por su compra!</h1>
        <a href="tienda.php" class="btn">Seguir comprando</a>
        <br>
        <a href="index.php" class="btn">Volver al inicio</a>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
