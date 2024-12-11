<?php
// Incluir el modelo de Usuario
require_once 'models/Usuario.php';

class UsuarioController {

    // Método para mostrar el formulario de login
    public function loginForm() {
        $this->render('login');
    }

    // Método para procesar el inicio de sesión
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario de login
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];

            // Validar que los campos no estén vacíos
            if (!empty($usuario) && !empty($contraseña)) {
                // Verificar las credenciales
                $usuarioModel = new Usuario();
                $usuarioAutenticado = $usuarioModel->autenticar($usuario, $contraseña);

                if ($usuarioAutenticado) {
                    // Iniciar sesión y redirigir al dashboard
                    session_start();
                    $_SESSION['usuario'] = $usuarioAutenticado;
                    header("Location: /dashboard");
                } else {
                    echo "Credenciales incorrectas.";
                }
            } else {
                echo "Por favor ingrese usuario y contraseña.";
            }
        }
    }

    // Método para cerrar sesión
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /login");
    }

    // Método para renderizar las vistas
    private function render($view) {
        include "views/$view.php";
    }
}
?>
