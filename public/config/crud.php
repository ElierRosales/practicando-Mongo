<?php

require_once "conection.php";
    class Crud extends Conection{
        public function insert($tabla, $datos){
            $conection = $this->conectar();
            $bulk = new MongoDB\Driver\BulkWrite;
            $bulk->insert($datos);
            $conection->executeBulkWrite($tabla, $bulk);
        }
        public function read($tabla){
            $conection = $this->conectar();
            $personas = new MongoDB\Driver\Query([]);
            $rows = $conection->executeQuery($tabla, $personas);
            return $rows;
        }
        public function update($tabla, $datos, $condicion){
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