<?php require_once "templates/header.php";
require_once "config/crud.php";
$crud = new Crud();
$id = $_POST["id"];
$alumno = $crud->readOne($id);
?>
<?php include "templates/header.php"?>

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
                <form action="procesos/update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $alumno->_id; ?>">
                    <fieldset>  
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="" class="form-control" value="<?php echo $alumno -> nombre;?>" required aria-describedby="helpId"/>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellido paterno</label>
                            <input type="text" name="paterno" id="" class="form-control" value="<?php echo $alumno -> paterno;?>" required aria-describedby="helpId"/>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellido materno</label>
                            <input type="text" name="materno" id="" class="form-control" value="<?php echo $alumno -> materno;?>" required aria-describedby="helpId"/>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha de nacimiento</label>
                            <input type="date" name="fecha_nacimiento" id="" class="form-control" value="<?php echo $alumno -> fecha_nacimiento;?>" required aria-describedby="helpId"/>
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