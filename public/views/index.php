<?php
include "../config/conection.php";
include "../templates/header.php";
include "../users/user_manager.php";

if ($_POST) {
  // Capturamos los datos del formulario
  $usuario = $_POST['usuario'];
  $contrasenia = $_POST['contrasenia'];
  
  // Creamos una instancia del manejador de usuarios
  $userManager = new UserManager(); // Asegúrate de que la clase se llame UserManager o según lo tengas en user_manager.php
  
  // Llamamos al método para autenticar al usuario
  $authenticated = $userManager->authenticateUser($usuario, $contrasenia);

  if ($authenticated) {
      // Si la autenticación es exitosa, iniciamos sesión
      session_start();
      $_SESSION['usuario'] = $usuario;
      header('Location: alumnos.php');
      exit();
  } else {
      // Si falla la autenticación, mostramos un mensaje de error
      $mensaje = "Error: El usuario o la contraseña son incorrectos.";
  }
}
?>
<div class="container">
         <div class="row">
              <div class="col-md-5"></div>
              <div class="col-md-5">
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                      <div class="card">
                        <div class="card-header">
                          Login
                        </div>
                        <div class="card-body">
                        <?php if(isset($mensaje)){?>
                          <div class="alert alert-danger" role="alert">
                                  <?php echo $mensaje ; ?> 
                          </div>
                         <?php }?>              
                            <form  action="" method="POST">
                                  <div class = "form-group">
                                      <label >Usuario</label>
                                      <input type="text" class="form-control" name="usuario"  placeholder="Usuario">
                                  </div>
    
                                  <div class="form-group">
                                      <label >Contraseña</label>
                                      <input type="password" class="form-control" name="contrasenia"  placeholder="Contraseña">
                                  </div>
                                  <br/>
                                  <br/>
                                  <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>                    
                        </div>
                      </div>
              </div>
           </div>
         </div>


<?php include "../templates/footer.php"?>
