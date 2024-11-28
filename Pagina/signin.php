<?php
// Incluye la conexión
include 'conexion.php';

// Verifica si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validación básica
    if (!empty($email) && !empty($password)) {
        // Cifrar la contraseña (buenas prácticas)
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

        // Preparar la consulta
        $sql = "INSERT INTO usuarios (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ss", $email, $passwordHashed);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                $mensaje = "¡Registro exitoso!";
            } else {
                $mensaje = "Error al registrar: " . $stmt->error;
            }

            $stmt->close();
        } else {
            $mensaje = "Error en la preparación de la consulta: " . $conn->error;
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
    <style>
        /* Ocultar el formulario cuando se haya enviado exitosamente */
        .login-container form {
            display: <?= isset($mensaje) && $mensaje == "¡Registro exitoso!" ? 'none' : 'block'; ?>;
        }

        h1 {
           display: <?= isset($mensaje) && $mensaje == "¡Registro exitoso!" ? 'none' : 'block'; ?>;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h1>Crear cuenta</h1>

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
            <button type="submit" class="btn">Registrarse</button>
        </form>
        <div class="register-link">
            <p>¿Ya tienes cuenta? <a href="login.php">Iniciar sesión</a></p>
        </div>
    </div>
</body>
</html>

