<?php
// Incluir la conexión a la base de datos
require_once 'config/Database.php';

class Encuesta {

    private $db;

    public function __construct() {
        // Obtener la instancia de la conexión a la base de datos
        $this->db = Database::getConnection();
    }

    // Método para crear una nueva encuesta
    public function crear($titulo, $categoria_id, $porcentajes, $participantes) {
        // Insertar la encuesta
        $query = "INSERT INTO encuestas (titulo, categoria_id) VALUES (:titulo, :categoria_id)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':categoria_id', $categoria_id);

        if ($stmt->execute()) {
            $encuesta_id = $this->db->lastInsertId(); // Obtener el ID de la encuesta recién creada

            // Asociar los participantes con los porcentajes en la encuesta
            foreach ($participantes as $index => $participante_id) {
                $porcentaje = $porcentajes[$index];
                $this->asociarParticipanteEncuesta($encuesta_id, $participante_id, $porcentaje);
            }

            return true;
        }
        return false;
    }

    // Método para asociar un participante con una encuesta
    private function asociarParticipanteEncuesta($encuesta_id, $participante_id, $porcentaje) {
        $query = "INSERT INTO encuesta_participante (encuesta_id, participante_id, porcentaje) 
                  VALUES (:encuesta_id, :participante_id, :porcentaje)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':encuesta_id', $encuesta_id);
        $stmt->bindParam(':participante_id', $participante_id);
        $stmt->bindParam(':porcentaje', $porcentaje);
        $stmt->execute();
    }

    // Método para obtener todas las encuestas
    public static function listar() {
        $db = Database::getConnection();
        $query = "SELECT * FROM encuestas";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
