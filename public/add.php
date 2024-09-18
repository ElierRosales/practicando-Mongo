<?php include "templates/header.php"?>

<!--Solo para empezar, esto mandarlo a la página del formulario cuando quede lista la base de datos -->
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col">
              <div class="card mt-4">
              <div class="card-body">
                <h1>Agregar nuevo registro</h1>
                <hr>
                <form action="">
                    <fieldset>
                        <legend>Formulario para agregar un nuevo registro</legend>
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Nombre del alumno" aria-describedby="helpId"/>
                            <small id="helpId" class="text-muted">Nombre del alumno</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellido paterno</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Apellido Paterno" aria-describedby="helpId"/>
                            <small id="helpId" class="text-muted">Apellido paterno</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellido materno</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Apellido Materno" aria-describedby="helpId"/>
                            <small id="helpId" class="text-muted">Apellido materno</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha de nacimiento</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Fecha de nacimiento" aria-describedby="helpId"/>
                            <small id="helpId" class="text-muted">Fecha de nacimiento</small>
                        </div>
                    </fieldset>
                </form>
                </div>
              </div>
            </div>
        </div>
        <a name="returnAlumnos" id="returnAlumnos" class="btn btn-primary" href="add.php" role="button">Agregar alumno</a>  
  <a name="returnAlumnos" id="returnAlumnos" class="btn btn-primary" href="index.php" role="button">Regresar</a>
  
</div>