<!-- /reportes/index.php -->

<?php include('../layouts/header.php'); ?>

<h2>Reportes y Estadísticas</h2>
<p>Visualiza los reportes y estadísticas de las encuestas realizadas.</p>

<!-- Reporte de encuestas completadas -->
<div class="card">
    <div class="card-header">
        <h4>Encuestas Completadas</h4>
    </div>
    <div class="card-body">
        <p>Total de encuestas completadas: <?= $total_encuestas; ?></p>
        <p>Fecha de la última encuesta: <?= $ultima_encuesta_fecha; ?></p>
    </div>
</div>

<!-- Reporte de participantes por categoría -->
<div class="card mt-3">
    <div class="card-header">
        <h4>Participantes por Categoría</h4>
    </div>
    <div class="card-body">
        <p>A continuación, se muestra el número de participantes en cada categoría:</p>
        <ul>
            <?php foreach ($categorias_participantes as $categoria => $participantes): ?>
                <li><strong><?= htmlspecialchars($categoria); ?>:</strong> <?= $participantes; ?> participantes</li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!-- Gráfico de distribución de resultados -->
<div class="card mt-3">
    <div class="card-header">
        <h4>Distribución de Resultados</h4>
    </div>
    <div class="card-body">
        <p>Gráfico de distribución de los resultados de las encuestas completadas:</p>
        <img src="<?= $grafica_resultados_url; ?>" alt="Distribución de Resultados" class="img-fluid">
    </div>
</div>

<!-- Gráfico de participación por porcentaje -->
<div class="card mt-3">
    <div class="card-header">
        <h4>Participación por Porcentaje</h4>
    </div>
    <div class="card-body">
        <p>Gráfico de participación por porcentaje de los participantes:</p>
        <img src="<?= $grafica_participacion_url; ?>" alt="Participación por Porcentaje" class="img-fluid">
    </div>
</div>

<?php include('layouts/footer.php'); ?>
