<?php
// Incluir la conexión a la base de datos
require_once 'config/Database.php';

class Usuario {

    private $db;

    public function __construct() {
        // Obtener la instancia de la conexión a la base de datos
        $this->db = Database::getConnection();
    }

    // Método para autenticar un usuario
    public function autenticar($usuario, $contraseña) {
        $query = "SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
        $usuarioEncontrado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuarioEncontrado && password_verify($contraseña, $usuarioEncontrado['contraseña'])) {
            return $usuarioEncontrado;
        }
        return false;
    }

    // Método para registrar un nuevo usuario
    public function registrar($usuario, $contraseña) {
        $hashContraseña = password_hash($contraseña, PASSWORD_BCRYPT);
        $query = "INSERT INTO usuarios (usuario, contraseña) VALUES (:usuario, :contraseña)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':contraseña', $hashContraseña);
        return $stmt->execute();
    }
}
?>
