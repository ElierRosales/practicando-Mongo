<?php
include "../config/conection.php";
include "../users/user_manager.php";

$mensaje = "";

if ($_POST) {
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    $userManager = new UserManager();

    // Autenticar al usuario
    $authenticated = $userManager->authenticateUser($usuario, $contrasenia);

    if ($authenticated) {
        // Si la autenticación es exitosa, iniciar sesión
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: ../views/alumnos.php');
        exit();
    } else {
        // Si falla la autenticación, generar mensaje de error
        $mensaje = "Error: El usuario o la contraseña son incorrectos.";
    }
}

// Incluir la vista
include "../views/login_view.php";
