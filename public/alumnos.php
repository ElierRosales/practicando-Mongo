<?php include "templates/header.php"?>
<?php 
require_once "config/crud.php";
$crud = new Crud();
$alumnos = $crud->read("registros.registros");
?>



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
                      <!--Aquí se recorre el array de alumnos para mostrar los registros-->
                    <?php 
                      foreach($alumnos as $alumno){
                    ?>
                      <tr class="">
                        <td scope="row"> <?php echo $alumno->nombre;?> </td></td>
                        <td scope="row"><?php echo $alumno->paterno;?></td>
                        <td scope="row"><?php echo $alumno->materno;?></td>
                       <td scope="row"><?php echo $alumno->fecha_nacimiento;?></td>
                        <td scope="row">
                          <form action="update.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $alumno->_id;?>">
                            <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-user-pen"></i></button>
                          </form>
                        </td>
                       <td scope="row">
                          <form action="delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $alumno->_id;?>">
                            <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-user-xmark"></i></button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                  </table>
                </div>
                <div class="d-flex justify-content-center">
                    <a name="returnAlumnos" id="returnAlumnos" class="btn btn-outline-success mx-5" href="add.php" role="button">Agregar alumno</a>
                    <a name="returnAlumnos" id="returnAlumnos" class="btn btn-outline-primary mx-4" href="index.php" role="button">Regresar</a>
                </div>
                </div>
              </div>
            </div>
        </div>  
</div>
<?php include "templates/footer.php"?>