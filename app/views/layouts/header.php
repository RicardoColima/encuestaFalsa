<!-- /layouts/header.php -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    
    <!-- Enlace a las hojas de estilo (CSS) -->
    <link rel="stylesheet" href="assets/css/styles.css">
<!-- CDN de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- CDN de Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    
    <!-- Aquí puedes agregar más enlaces a CSS si es necesario -->
</head>

<body>
    <!-- Barra de navegación -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/participantes">Participantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/encuestas">Encuestas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/categorias">Categorías</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/usuarios">Usuarios</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <!-- Aquí se incluirán las vistas específicas -->
