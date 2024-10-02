<?php
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
    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location: ../alumnos.php"); // Redirigir si todo está bien
    } else {
        echo "Error: no se actualizó el documento.";
    }

} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "Error de MongoDB: " . $e->getMessage();
}
exit;
?>
