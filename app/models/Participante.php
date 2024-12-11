<?php
// Incluir la conexión a la base de datos
require_once 'config/Database.php';

class Participante {

    private $db;

    public function __construct() {
        // Obtener la instancia de la conexión a la base de datos
        $this->db = Database::getConnection();
    }

    // Método para guardar un nuevo participante en la base de datos
    public function guardar($nombre, $municipio_distrito, $cargo, $categoria_id, $foto) {
        $query = "INSERT INTO participantes (nombre, municipio_distrito, cargo, categoria_id, foto) 
                  VALUES (:nombre, :municipio_distrito, :cargo, :categoria_id, :foto)";

        // Preparar la consulta
        $stmt = $this->db->prepare($query);

        // Asignar los valores a los parámetros de la consulta
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':municipio_distrito', $municipio_distrito);
        $stmt->bindParam(':cargo', $cargo);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->bindParam(':foto', $foto);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Método para obtener todos los participantes
    public static function listar() {
        $db = Database::getConnection();
        $query = "SELECT * FROM participantes";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
