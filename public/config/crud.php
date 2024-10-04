<?php

require_once "conection.php";
    class Crud extends Conection{

        public function insert($datos, $tabla = 'registros.registros') {
            $conection = $this->conectar(); // Conectas a la base de datos
            $bulk = new MongoDB\Driver\BulkWrite; // Inicializas el objeto BulkWrite
            $bulk->insert($datos); // Añades los datos para insertar
            
            try {
                // Ejecutas la inserción y retornas el resultado
                $result = $conection->executeBulkWrite($tabla, $bulk);
                return $result; // Asegúrate de retornar el objeto de resultado
            } catch (MongoDB\Driver\Exception\Exception $e) {
                // Muestras un mensaje en caso de error
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

        public function update($tabla, $id, $datos){
            $conection = $this->conectar();
            $bulk = new MongoDB\Driver\BulkWrite;
        
            // Debes usar $set para actualizar solo los campos específicos
            $bulk->update(
                ['_id' => new MongoDB\BSON\ObjectId($id)],  // Filtro basado en el ID
                ['$set' => $datos],  // Campos a actualizar
                ['multi' => false, 'upsert' => false] // Solo actualizar un documento
            );
        
            // Ejecuta la operación de escritura
            $result = $conection->executeBulkWrite($tabla, $bulk);
            return $result;
        }

        public function readOne($id) {
            $conection = $this->conectar(); // Obtén la conexión
            $database = new MongoDB\Database($conection, 'registros'); // Crea una instancia de la base de datos
            $collection = $database->selectCollection('registros'); // Selecciona la colección
            $datos = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
            return $datos;
        }
        
        public function delete($tabla='registros.registros', $recibe_id){
            $conection = $this->conectar();
            $bulk = new MongoDB\Driver\BulkWrite;
            $bulk->delete($recibe_id);
            $conection->executeBulkWrite($tabla, $bulk);
        }

        public function alertasMensajes($mensaje){
            if ($mensaje == 'insert') {
                return json_encode([
                    'title' => '¡Registro exitoso!',
                    'text' => 'El registro se ha guardado con éxito',
                    'icon' => 'success'
                ]);
            } elseif ($mensaje == 'update') {
                return json_encode([
                    'title' => '¡Actualización exitosa!',
                    'text' => 'El registro se ha actualizado con éxito',
                    'icon' => 'success'
                ]);
            } elseif ($mensaje == 'delete') {
                return json_encode([
                    'title' => '¡Eliminación exitosa!',
                    'text' => 'El registro se ha eliminado con éxito',
                    'icon' => 'success'
                ]);
            }
            return null;
        }

    }
?>