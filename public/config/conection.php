<?php
require_once $_SERVER ['DOCUMENT_ROOT']. '/xampp/practicando-Mongo/vendor/autoload.php';
    class Conection{
        public function conectar(){
            $host = "localhost";
            $db = "registros";
            $user = "admin";
            $password = "123456";
            $puerto = "27017";


            $conection = new MongoDB\Driver\Manager("mongodb://$user:$password@$host/$db");
            return $conection;
        }
        
    }
    try{
        $conection = new Conection();
        $conection->conectar();
        echo "Conexión exitosa";
    }catch(Exception $e){
        echo "Error en la conexión: ".$e->getMessage();
    }
 ?>       