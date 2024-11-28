<?php

session_start(); // Inicia la sesión

// Incluye la conexión
include 'conexion.php';

// Verifica si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validación básica
    if (!empty($email) && !empty($password)) {
        // Preparar la consulta para buscar el email en la base de datos
        $sql = "SELECT email, password FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                // Email encontrado, ahora verificar la contraseña
                $stmt->bind_result($dbEmail, $dbPassword);
                $stmt->fetch();

                // Verificar la contraseña
                if (password_verify($password, $dbPassword)) {
                    // Almacenar el correo electrónico en la sesión
                    $_SESSION['user_email'] = $dbEmail;

                    // Redirigir al usuario a la página principal
                    header("Location: tienda.php"); // Cambia dashboard.php por la página que desees
                    exit();
                } else {
                    $mensaje = "Contraseña incorrecta.";
                }
            } else {
                $mensaje = "El correo electrónico no está registrado.";
            }

            $stmt->close();
        } else {
            $mensaje = "Error al preparar la consulta: " . $conn->error;
        }
    } else {
        $mensaje = "Por favor, completa todos los campos.";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/sesion.css">
    <link rel="icon" href="momo.ico" sizes="64x64" type="image/png">
</head>
<body>
    <div class="login-container">
        <h1>Iniciar sesión</h1>

        <!-- Mostrar el mensaje si existe -->
        <?php if (isset($mensaje)) { echo "<p>$mensaje</p>"; } ?>

        <form action="" method="POST"> <!-- Enviar al mismo archivo -->
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            </div>
            <button type="submit" class="btn">Iniciar sesión</button>
        </form>
        <div class="register-link">
            <p>¿No tienes cuenta? <a href="signin.php">Registrarse</a></p>
            <h5><a href="index.php">Volver al inicio</a></h5>
        </div>
    </div>
</body>
</html>
