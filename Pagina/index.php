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
    <link rel="stylesheet" href="css/styles.css">
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
                <li><a href="#">Inicio</a></li>
                <li><a href="tienda.php">Productos</a></li>
                <li><a href="#quienes_somos">Quienes somos</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <?php if (!$isLoggedIn): ?>
                                    <li><a href="login.php">Iniciar sesión</a></li>
                                <?php endif; ?>

                                <!-- Mostrar 'Cerrar sesión' si está logueado -->
                                <?php if ($isLoggedIn): ?>
                                    <li><a href="logout.php" id="btn-logout">Cerrar sesión</a></li>
                                <?php endif; ?>
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

    <div id="quienes_somos" class="section">
        <div class="contquienes">
        <img src="img/quienes_somos.jpg" alt="quienes somos">
        <p>¡Somos la comiqueria Capítan Momazo! Tito Calderón, más conocido como Capitán Momazo, es un humilde repartidor de fideos que ganó poderes al luchar contra su archienemigo "Virus Eh". Ofrecemos los mejores mangas y cómics para alimentar tu pasión por las aventuras. Explorá colecciones épicas y sumérgete en un universo donde siempre hay algo nuevo por descubrir. Únete a nuestra misión: ¡Banear el aburrimiento de la rutina! 💥</p>
        </div>
    </div>

    <div id="contacto" class="section">
    <img src="img/contacto.jpg" alt="quienes somos">
        <ul>
        <li><i class="fa-regular fa-envelope"></i> capitanmomazo@gmail.com</li>
        <li><i class="fa-solid fa-phone"></i> 11 43561197</li>
        <li><i class="fa-brands fa-instagram"></i> gero.momo</li>
        <li></li>
        </ul>
    </div>

    <footer>
        <p>&copy; 2024 Capitan Momazo</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
