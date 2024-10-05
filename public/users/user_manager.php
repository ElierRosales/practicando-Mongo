<?php

require_once "../config/conection.php";

class UserManager extends Conection {

    public function registerUser($usuario, $contrasenia) {
        $conection = $this->conectar();
        $bulk = new MongoDB\Driver\BulkWrite;

        // Hash de la contraseña antes de almacenarla
        $hashed_password = password_hash($contrasenia, PASSWORD_DEFAULT);

        // Insertar el usuario y la contraseña hasheada en la colección 'users'
        $bulk->insert(['usuario' => $usuario, 'contrasenia' => $hashed_password]);
        $conection->executeBulkWrite('registros.users', $bulk);
    }

    public function authenticateUser($usuario, $contrasenia) {
        $conection = $this->conectar();
        
        // Consulta para encontrar el usuario
        $filter = ['usuario' => $usuario];
        $query = new MongoDB\Driver\Query($filter);
        $result = $conection->executeQuery('registros.users', $query);
        
        $user = current($result->toArray());

        // Verifica si el usuario existe y si la contraseña es correcta
        if ($user && password_verify($contrasenia, $user->contrasenia)) {
            return true; // Autenticación exitosa
        } else {
            return false; // Fallo en la autenticación
        }
    }
}
