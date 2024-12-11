<!-- /encuestas/ver.php -->

<?php include('../layouts/header.php'); ?>

<h2>Detalles de la Encuesta: <?= htmlspecialchars($encuesta['titulo']); ?></h2>

<p><strong>Categoría:</strong> <?= htmlspecialchars($encuesta['categoria']); ?></p>
<p><strong>Fecha de Creación:</strong> <?= date('d/m/Y', strtotime($encuesta['fecha_creacion'])); ?></p>

<h4>Gráfica de Resultados</h4>

<!-- Aquí mostramos la gráfica generada -->
<img src="<?= $grafica_url; ?>" alt="Gráfica de Resultados" class="img-fluid">

<h4>Participantes</h4>
<ul>
    <?php foreach ($participantes as $participante): ?>
        <li>
            <?= htmlspecialchars($participante['nombre']); ?> (<?= $participante['municipio']; ?>) - <?= $participante['porcentaje']; ?>%
        </li>
    <?php endforeach; ?>
</ul>

<?php include('../layouts/footer.php'); ?>
