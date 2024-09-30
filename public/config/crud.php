<?php

require_once "conection.php";
    class Crud extends Conection{
        public function insert($datos, $tabla = 'registros.registros') {
            $conection = $this->conectar();
            $bulk = new MongoDB\Driver\BulkWrite;
            $bulk->insert($datos);
            
            try {
                return $conection->executeBulkWrite($tabla, $bulk);
            } catch (MongoDB\Driver\Exception\Exception $e) {
                echo "Error en la inserción: " . $e->getMessage();
                return null;
            }
        }
        public function read($tabla='registros.registros'){
            $conection = $this->conectar();
            $colection = new MongoDB\Driver\Query([]);
            $rows = $conection->executeQuery($tabla, $colection);
            return $rows;
        }

        public function update($tabla='registros.registros' , $datos, $condicion){
            $conection = $this->conectar();
            $bulk = new MongoDB\Driver\BulkWrite;
            $bulk->update($condicion, $datos);
            $conection->executeBulkWrite($tabla, $bulk);
        }

        public function readOne($id) {
            $conection = $this->conectar(); // Obtén la conexión
            $database = new MongoDB\Database($conection, 'registros'); // Crea una instancia de la base de datos
            $collection = $database->selectCollection('registros'); // Selecciona la colección
            // Busca un documento con el ID especificado
            $datos = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
            return $datos;
        }
        
        public function delete($tabla='registros.registros', $recibe_id){
            $conection = $this->conectar();
            $bulk = new MongoDB\Driver\BulkWrite;
            $bulk->delete($recibe_id);
            $conection->executeBulkWrite($tabla, $bulk);
        }
    }
?>