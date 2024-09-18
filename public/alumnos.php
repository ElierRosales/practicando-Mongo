<?php include "templates/header.php"?>

<!--Solo para empezar, esto mandarlo a la página del formulario cuando quede lista la base de datos -->
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col">
              <div class="card mt-4">
              <div class="card-body">
                <h1>Registro de alumnos</h1>
                <hr>
                <div class="table-responsive">
                  <table class="table">
                   <thead>
                     <tr class="table-active">
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido paterno</th>
                      <th scope="col">Apellido materno</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="">
                        <td scope="row">R1C1</td>
                        <td scope="row">R1C2</td>
                        <td scope="row">R1C3</td>
                       <td scope="row">R1C3</td>
                        <td scope="row">
                          <form action="" method="post">
                            <a name="" id="" class="btn btn-outline-info" href="#" role="button"><i class="fa-solid fa-user-pen"></i></a>
                          </form>
                        </td>
                       <td scope="row">
                          <form action="" method="post">
                            <a name="" id="" class="btn btn-outline-danger" href="#" role="button"><i class="fa-solid fa-user-xmark"></i></a>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>
        </div>
        <a name="returnAlumnos" id="returnAlumnos" class="btn btn-primary" href="add.php" role="button">Agregar alumno</a>  
  <a name="returnAlumnos" id="returnAlumnos" class="btn btn-primary" href="index.php" role="button">Regresar</a>
  
</div>