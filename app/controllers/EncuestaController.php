<?php
// Incluir los modelos necesarios
require_once 'models/Encuesta.php';
require_once 'models/Participante.php';
require_once 'models/Categoria.php';

class EncuestaController {

    // Método para crear una encuesta
    public function crearEncuesta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario
            $titulo = $_POST['titulo'];
            $categoria_id = $_POST['categoria_id'];
            $porcentajes = $_POST['porcentajes']; // Array de porcentajes
            $participantes = $_POST['participantes']; // Array de IDs de participantes

            // Validar que los datos sean correctos
            if (!empty($titulo) && !empty($categoria_id) && !empty($porcentajes) && !empty($participantes)) {
                // Crear una instancia de Encuesta y guardarlo en la base de datos
                $encuesta = new Encuesta();
                $encuesta->crear($titulo, $categoria_id, $porcentajes, $participantes);

                // Redirigir a la lista de encuestas
                header("Location: /listarEncuestas");
            } else {
                echo "Todos los campos son obligatorios.";
            }
        }

        // Mostrar el formulario de creación de encuesta
        $categorias = Categoria::listar();
        $this->render('crearEncuesta', ['categorias' => $categorias]);
    }

    // Método para mostrar todas las encuestas
    public function listarEncuestas() {
        // Obtener todas las encuestas
        $encuestas = Encuesta::listar();
        $this->render('listarEncuestas', ['encuestas' => $encuestas]);
    }

    // Método para renderizar las vistas
    private function render($view, $data = []) {
        extract($data);
        include "views/$view.php";
    }
}
?>
