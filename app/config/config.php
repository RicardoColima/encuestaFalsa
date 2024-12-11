<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');   // Dirección del servidor de la base de datos
define('DB_USER', 'root');        // Usuario de la base de datos
define('DB_PASS', '');            // Contraseña de la base de datos
define('DB_NAME', 'encuesta');    // Nombre de la base de datos

// Clase de conexión a la base de datos
class Database {
    private static $conn;  // Variable estática para la conexión

    // Método estático para obtener la conexión
    public static function getConnection() {
        // Si no hay conexión activa, crearla
        if (self::$conn === null) {
            try {
                self::$conn = new PDO(
                    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                    DB_USER,
                    DB_PASS
                );
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configuración de manejo de errores
            } catch (PDOException $e) {
                echo 'Connection Error: ' . $e->getMessage();
                exit;  // Salir si no se puede conectar
            }
        }
        return self::$conn;  // Retornar la conexión
    }
}
?>
