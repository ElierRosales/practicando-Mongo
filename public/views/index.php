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
                    <form action="../controllers/login_controller.php" method="POST" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="contrasenia">Contraseña</label>
                            <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña">
                        </div>
                        <br/><br/>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function validateForm() {
    var usuario = document.getElementById('usuario').value;
    var contrasenia = document.getElementById('contrasenia').value;

    if (usuario === '' || contrasenia === '') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Por favor, llena todos los campos'
        });
        return false; // Evita que el formulario se envíe
    }
    return true; // Permite que el formulario se envíe
}
</script>

<?php include "../templates/footer.php"; ?>

