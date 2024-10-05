<?php session_start();
require_once "../config/crud.php";
$crud = new Crud();
$id = $_POST["id"];
$recibe_id = ['_id' => new MongoDB\BSON\ObjectId($id)];
$crud->delete('registros.registros', $recibe_id);
$_SESSION['mensaje'] = 'delete';
header("Location: ../views/alumnos.php");
exit;
?>
