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
                <form action="">
                    <fieldset>
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Ingresa nombre completo" aria-describedby="helpId"/>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellido paterno</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Ingresa apellido paterno" aria-describedby="helpId"/>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellido materno</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Ingresa apellido materno" aria-describedby="helpId"/>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha de nacimiento</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Ingresa la fecha de nacimiento" aria-describedby="helpId"/>
                        </div>
                    </fieldset>
                </form>
                <div class="d-flex justify-content-center">
                    <a name="returnAlumnos" id="returnAlumnos" class="btn btn-outline-success mx-4" href="add.php" role="button">Editar</a>
                </div>
                </div>
              </div>
            </div>
        </div>
        
  
</div>