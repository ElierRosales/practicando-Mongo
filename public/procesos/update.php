<?php session_start();

require_once "../config/crud.php";

$Crud = new Crud();

$id = $_POST['id'];  // Captura el ID enviado por el formulario

// Estructura de los nuevos datos para la actualización
$datos = [
    'nombre' => $_POST['nombre'],
    'paterno' => $_POST['paterno'],
    'materno' => $_POST['materno'],
    'fecha_nacimiento' => $_POST['fecha_nacimiento']
];

try {
    // Intenta actualizar el documento
    $respuesta = $Crud->update('registros.registros', $id, $datos);

    // Verifica si la operación fue exitosa
    if ($respuesta->getModifiedCount() > 0) {
        $_SESSION['mensaje'] = 'update';  // Almacena el mensaje en la sesión
    } elseif ($respuesta->getMatchedCount() > 0) {
        // El documento coincidió pero no se modificó
        $_SESSION['mensaje'] = 'no_change';  // Mensaje diferente si no hubo cambio
    } else {
        $_SESSION['mensaje'] = 'error';  // Error si no se encontró ni actualizó el documento
    }
    header("location: ../alumnos.php");  // Redirecciona a la página de alumnos

} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "Error de MongoDB: " . $e->getMessage();
}
exit;
?>
