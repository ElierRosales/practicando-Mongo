<?php
require_once "../users/user_manager.php";

$userManager = new UserManager();

// Datos del usuario administrador
$usuario_admin = "admin";
$contrasenia_admin = "123456";

// Registrar el usuario administrador
$userManager->registerUser($usuario_admin, $contrasenia_admin);

echo "Usuario administrador creado con éxito.";
?>
