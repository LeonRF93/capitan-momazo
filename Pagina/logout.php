<?php
session_start(); // Inicia la sesión

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();
?>

<script>
    // Vaciar el carrito en localStorage antes de redirigir
    localStorage.removeItem('carrito');
    console.log("Carrito vaciado exitosamente.");

    // Redirigir a la página de login
    window.location.href = "login.php"; // O la página que prefieras
</script>
