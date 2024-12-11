<?php
// Incluir el modelo de Participante
require_once 'models/Participante.php';

class RegistroParticipanteController {

    // Método para registrar un participante
    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario
            $nombre = $_POST['nombre'];
            $municipio_distrito = $_POST['municipio_distrito'];
            $cargo = $_POST['cargo'];
            $categoria_id = $_POST['categoria_id'];
            $foto = $_FILES['foto'];

            // Validar que todos los campos estén completos
            if (!empty($nombre) && !empty($municipio_distrito) && !empty($cargo) && !empty($categoria_id)) {
                // Subir la foto
                $fotoRuta = $this->subirFoto($foto);
                
                // Crear una instancia de Participante y guardarlo en la base de datos
                $participante = new Participante();
                $participante->guardar($nombre, $municipio_distrito, $cargo, $categoria_id, $fotoRuta);

                // Redirigir al listado de participantes
                header("Location: /listarParticipantes");
            } else {
                echo "Todos los campos son obligatorios.";
            }
        }
    }

    // Método para subir la foto del participante
    private function subirFoto($foto) {
        $directorio = "uploads/"; // Carpeta donde se guardarán las fotos
        $rutaDestino = $directorio . basename($foto["name"]);

        // Verificar si el archivo es una imagen
        if (getimagesize($foto["tmp_name"]) === false) {
            echo "El archivo no es una imagen.";
            return false;
        }

        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($foto["tmp_name"], $rutaDestino)) {
            return $rutaDestino;
        } else {
            echo "Error al subir la imagen.";
            return false;
        }
    }
}
?>
