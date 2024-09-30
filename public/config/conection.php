<?php
require_once $_SERVER ['DOCUMENT_ROOT']. '/xampp/practicando-Mongo/vendor/autoload.php';
    class Conection{
        public function conectar(){
            $host = "localhost";
            $db = "registros";
            $user = "admin";
            $password = "123456";
            $puerto = "27017";


            try {
                // Incluimos el puerto en la cadena de conexión
                $conection = new MongoDB\Driver\Manager("mongodb://$user:$password@$host:$puerto/$db");
    
                // Intentar realizar una operación para verificar la conexión
                $command = new MongoDB\Driver\Command(["ping" => 1]);
                $conection->executeCommand($db, $command); // Ejecutamos un ping para probar la conexión
    
                return $conection; // Si todo es correcto, retornamos la conexión
            } catch (MongoDB\Driver\Exception\Exception $e) {
                echo "Error en la conexión: " . $e->getMessage();
                return null;
            }
        }
    }
    
    // Intentamos realizar la conexión
    $conection = new Conection();
    $conection->conectar();
    
 ?>       