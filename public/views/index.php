<?php include "../templates/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-5">
            <br/><br/><br/><br/><br/><br/><br/>
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <!-- Mostrar mensaje de error si existe -->
                    <?php if(!empty($mensaje)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $mensaje; ?> 
                        </div>
                    <?php endif; ?>
                    <!-- Formulario de inicio de sesión -->
                    <form action="../controllers/login_controller.php" method="POST">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña">
                        </div>
                        <br/><br/>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../templates/footer.php"; ?>
