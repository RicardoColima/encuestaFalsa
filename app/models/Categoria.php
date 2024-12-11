<?php
// Incluir la configuración de la base de datos
require_once '../config/config.php';

class Categoria {

    private $db;

    public function __construct() {
        // Crear una nueva instancia de la clase Database
        $database = new Database();
        $this->db = $database->connect();  // Conectar a la base de datos
    }

    // Método para obtener todas las categorías
    public function listar() {
        $query = "SELECT * FROM categorias";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
