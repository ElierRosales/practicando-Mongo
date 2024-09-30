<?php

    include "../config/conection.php";
    include "../config/crud.php";

    $Crud = new Crud();


    $datos = array(
        "nombre" => $_POST['nombre'],
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "fecha_nacimiento" => $_POST['fecha_nacimiento']
    );

    $respuesta = $Crud->insert($datos, 'registros.registros');

    if($respuesta -> getInsertedCount() > 0){
        header("location: ../alumnos.php");
    }else{
        echo "Error al registrar";
    }

?>