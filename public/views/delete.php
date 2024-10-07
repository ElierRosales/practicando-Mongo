<?php 
//Controlando la autenticación
include '../controllers/auth_controller.php';
verificarAutenticacion();
require_once "../templates/header.php";
require_once "../config/crud.php";
$crud = new Crud();
$id = $_POST["id"];
$alumno = $crud->readOne($id);
$carreras = $crud->read("registros.carreras");
$carrerasArray = [];
foreach ($carreras as $carrera) {
    $carrerasArray[(string)$carrera->_id] = $carrera->nombre;
}
?>
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <h4 class="alert-heading">¡Atención!</h4>
  <p class="mb-0">Estás a punto de eliminar el siguiente registro:</p>
  <hr>
  <strong>Si eliminas un registro no podrás recuperarlo.</strong>
</div>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <div class="d-flex bd-highlight mb-2">
                        <div class="mr-4 p-2 bd-highlight">
                            <a name="returnAlumnos" id="returnAlumnos" class="btn btn-outline-primary mx-4" href="alumnos.php" role="button"><i class="fa-solid fa-arrow-left"></i></a>
                        </div>
                        <div class="p-2 bd-highlight">
                            <h1>Eliminar registro</h1>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-danger">
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido paterno</th>
                                    <th scope="col">Apellido materno</th>
                                    <th scope="col">Fecha de nacimiento</th>
                                    <th scope="col"> Carrera</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"><?php echo $alumno->nombre; ?></td>
                                    <td scope="row"><?php echo $alumno->paterno; ?></td>
                                    <td scope="row"><?php echo $alumno->materno; ?></td>
                                    <td scope="row"><?php echo $alumno->fecha_nacimiento; ?></td>
                                    <td scope="row"><?php
                                        // Asegúrate de que la carrera está definida antes de usarla
                                        if (isset($carrerasArray[(string)$alumno->carrera])) {
                                            echo $carrerasArray[(string)$alumno->carrera]; // Mostrar el nombre de la carrera
                                        } else {
                                            echo "Sin carrera"; // Mensaje por defecto si no se encuentra la carrera
                                        }
                                        ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <form action="../procesos/delete.php" method="POST" class="d-flex justify-content-center">
                        <input type="hidden" name="id" value="<?php echo $alumno->_id; ?>">
                        <button type="button" class="btn btn-outline-danger delete-button">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>

<?php include "../templates/footer.php"; ?>

<script src="../js/boton_eliminar.js"></script>

