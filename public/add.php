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
                        <h1>Agregar nuevo registro</h1>
                    </div>
                </div>
                <hr>
                <form action="procesos/add.php" method="POST">
                    <fieldset>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa nombre completo" required>
                        </div>
                        <div class="mb-3">
                            <label for="paterno" class="form-label">Apellido paterno</label>
                            <input type="text" name="paterno" id="paterno" class="form-control" placeholder="Ingresa apellido paterno" required/>
                        </div>
                        <div class="mb-3">
                            <label for="materno" class="form-label">Apellido materno</label>
                            <input type="text" name="materno" id="materno" class="form-control" placeholder="Ingresa apellido materno" required/>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="Ingresa la fecha de nacimiento" required/>
                        </div>
                    </fieldset>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-success mx-4">Registrar</button>
                    </div>
                </form>
                </div>
              </div>
            </div>
        </div>
        
  
</div>