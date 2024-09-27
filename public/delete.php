<?php include "templates/header.php"?>

<div class="alert alert-dismissible alert-danger">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Cuidado</strong> Si eliminas un registro no podrás recuperarlo.
</div>

<!--Solo para empezar, esto mandarlo a la página del formulario cuando quede lista la base de datos -->
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
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="">
                        <td scope="row">R1C1</td>
                        <td scope="row">R1C2</td>
                        <td scope="row">R1C3</td>
                       <td scope="row">R1C3</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="d-flex justify-content-center">
                    <a name="returnAlumnos" id="returnAlumnos" class="btn btn-outline-danger mx-5" href="alumnos.php" role="button">Eliminar</a>
                </div>
                </div>
              </div>
            </div>
        </div>  
</div>