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
        public function delete($tabla, $condicion){
            $conection = $this->conectar();
            $bulk = new MongoDB\Driver\BulkWrite;
            $bulk->delete($condicion);
            $conection->executeBulkWrite($tabla, $bulk);
        }
    }
?>