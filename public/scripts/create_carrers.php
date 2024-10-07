<?php
require_once "../config/conection.php"; // Conexión a MongoDB
require_once "../config/crud.php"; // CRUD para MongoDB

$crud = new Crud();

// Carreras a insertar
$carreras = [
    ['nombre' => 'Ingeniería en computación', 'division' => 'Ciencias e ingenieria'],
    ['nombre' => 'Ingeniería en alimentos', 'division' => 'Ciencias e Ingeniería'],
    ['nombre' => 'Ingeniería en civil', 'division' => 'Ciencias e Ingeniería'],
    ['nombre' => 'Ingeniería en química', 'division' => 'Ciencias e Ingeniería'],
    ['nombre' => 'Derecho', 'division' => 'Ciencias Sociales y Humanidades'],
    ['nombre' => 'Psicología', 'division' => 'Ciencias Sociales y Humanidades'],
    ['nombre' => 'Enfermería', 'division' => 'Ciencias de la Salud'],
    ['nombre' => 'Medicina', 'division' => 'Ciencias de la Salud'],
    ['nombre' => 'Contaduría', 'division' => 'Ciencias Sociales y Humanidades'],
    ['nombre' => 'Biología', 'division' => 'Ciencias de la Salud']
];

try {
    $result = $crud->insertMany($carreras);
    echo "Carreras insertadas correctamente";
} catch (Exception $e) {
    echo "Error al insertar las carreras: " . $e->getMessage();
}
?>