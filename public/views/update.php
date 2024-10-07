<?php 
//Controlando la autenticación
include '../controllers/auth_controller.php';
verificarAutenticacion();
require_once "../templates/header.php";
require_once "../config/crud.php";
$crud = new Crud();
$carreras = $crud->read("registros.carreras");
$id = $_POST["id"];
$alumno = $crud->readOne($id);

?>

<!--Solo para empezar, esto mandarlo a la página del formulario cuando quede lista la base de datos -->
    <div class="container">
        <div class="row">
            <div class="col">
              <div class="card mt-4">
              <div class="card-body">
                <div class="d-flex bd-highlight mb-2">
                    <div class="mr-4 p-2 bd-highlight">
                        <a name="returnAlumnos" id="returnAlumnos" class="btn btn-outline-primary mx-4" href="alumnos.php" role="button"><i class="fa-solid fa-arrow-left"></i></a>
                    </div>
                    <div class="p-2 bd-highlight">
                        <h1>Editar registro</h1>
                    </div>
                </div>
                <hr>
                <form action="../procesos/update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $alumno->_id; ?>">
                    <fieldset>  
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $alumno -> nombre;?>" required aria-describedby="helpId"/>
                        </div>
                        <div class="mb-3">
                            <label for="paterno" class="form-label">Apellido paterno</label>
                            <input type="text" name="paterno" id="paterno" class="form-control" value="<?php echo $alumno -> paterno;?>" required aria-describedby="helpId"/>
                        </div>
                        <div class="mb-3">
                            <label for="materno" class="form-label">Apellido materno</label>
                            <input type="text" name="materno" id="materno" class="form-control" value="<?php echo $alumno -> materno;?>" required aria-describedby="helpId"/>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="<?php echo $alumno -> fecha_nacimiento;?>" required aria-describedby="helpId"/>
                        </div>
                        <div class="form-group">
                            <label for="carrera">Carrera</label>
                            <select class="form-control" id="carrera" name="carrera" required>
                                <?php foreach ($carreras as $carrera) { ?>
                                    <option value="<?php echo $carrera->_id; ?>" <?php echo ($carrera->_id == $alumno->carrera) ? 'selected' : ''; ?>>
                                        <?php echo $carrera->nombre; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </fieldset>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-success mx-4">Editar</button>
                    </div>
                </form>
                </div>
              </div>
            </div>
        </div>
        
  
</div>
<?php include "../templates/footer.php"?>