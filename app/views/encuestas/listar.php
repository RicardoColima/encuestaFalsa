<!-- /encuestas/listar.php -->

<?php include('layouts/header.php'); ?>

<h2>Listar Encuestas</h2>
<p>A continuación, se muestra el listado de encuestas creadas.</p>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Título</th>
            <th>Categoría</th>
            <th>Fecha de Creación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($encuestas as $encuesta): ?>
            <tr>
                <td><?= htmlspecialchars($encuesta['titulo']); ?></td>
                <td><?= htmlspecialchars($encuesta['categoria']); ?></td>
                <td><?= date('d/m/Y', strtotime($encuesta['fecha_creacion'])); ?></td>
                <td>
                    <a href="/encuestas/ver/<?= $encuesta['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                    <a href="/encuestas/editar/<?= $encuesta['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="/encuestas/eliminar/<?= $encuesta['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include('layouts/footer.php'); ?>
