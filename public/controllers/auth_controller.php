<?php session_start(); // Iniciar la sesión si no está iniciada

function verificarAutenticacion() {
    // Verificar si el usuario ha iniciado sesión
    if (!isset($_SESSION['usuario'])) {
        // Si no está autenticado, redirigir a la página de inicio de sesión
        header('Location: ../views/index.php');
        exit(); // Detener la ejecución del script
    }
}
?>
