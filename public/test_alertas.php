<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de SweetAlert2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>Prueba de SweetAlert2</h1>
        <button id="btnAgregar" class="btn btn-primary">Agregar Registro</button>
    </div>

    <script>
        document.getElementById('btnAgregar').addEventListener('click', function() {
            // Simulando el registro exitoso
            let mensaje = 'insert'; // Puedes cambiar esto para simular diferentes alertas

            // Mostrar la alerta según el mensaje
            if (mensaje === 'insert') {
                Swal.fire({
                    title: '¡Registro exitoso!',
                    text: 'El registro se ha guardado con éxito',
                    icon: 'success',
                    confirmButtonText: 'Cool'
                });
            } else if (mensaje === 'update') {
                Swal.fire({
                    title: '¡Actualización exitosa!',
                    text: 'El registro se ha actualizado con éxito',
                    icon: 'success',
                    confirmButtonText: 'Cool'
                });
            } else if (mensaje === 'delete') {
                Swal.fire({
                    title: '¡Eliminación exitosa!',
                    text: 'El registro se ha eliminado con éxito',
                    icon: 'success',
                    confirmButtonText: 'Cool'
                });
            }
        });
    </script>
</body>
</html>
