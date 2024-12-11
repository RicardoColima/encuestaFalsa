<?php
// Definición de la ubicación de la raíz del proyecto
define('BASE_URL', '/');

// Incluir el archivo de configuración principal
require_once '../app/config/config.php';

// Incluir las clases del autoloader para cargar las clases automáticamente
require_once '../app/libraries/Autoload.php';

// Iniciar el Router o el sistema de enrutamiento
$router = new Router();

// Registrar las rutas de la aplicación
$router->addRoute('GET', '/', 'HomeController@index'); // Ruta de inicio (home)
$router->addRoute('GET', '/participante/crear', 'RegistroParticipanteController@crear');
$router->addRoute('POST', '/participante/registro', 'RegistroParticipanteController@registrar');
$router->addRoute('GET', '/encuesta/crear', 'EncuestaController@crear');
$router->addRoute('POST', '/encuesta/guardar', 'EncuestaController@guardar');
$router->addRoute('GET', '/login', 'AuthController@login');
$router->addRoute('POST', '/login', 'AuthController@procesarLogin');

// Ejecutar la solicitud según la ruta solicitada
$router->dispatch();

?>
