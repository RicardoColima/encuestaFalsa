<!-- /encuestas/crear.php -->

<?php include('../layouts/header.php'); ?>

<h2>Crear Nueva Encuesta</h2>
<p>Complete el formulario a continuación para crear una nueva encuesta.</p>

<form action="/encuestas/guardar" method="POST">
    <div class="mb-3">
        <label for="titulo" class="form-label">Título de la Encuesta</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>

    <div class="mb-3">
        <label for="categoria" class="form-label">Categoría de la Encuesta</label>
        <select class="form-control" id="categoria" name="categoria" required>
            <option value="">Seleccione una categoría</option>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?= $categoria['id']; ?>"><?= $categoria['nombre']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <h4>Participantes Disponibles</h4>
    <?php foreach ($participantes as $participante): ?>
        <div class="mb-3">
            <input type="checkbox" name="participantes[]" value="<?= $participante['id']; ?>" id="participante_<?= $participante['id']; ?>">
            <label for="participante_<?= $participante['id']; ?>"><?= $participante['nombre']; ?> (<?= $participante['municipio']; ?>)</label>
            <input type="number" name="porcentaje_<?= $participante['id']; ?>" min="0" max="100" value="0" class="form-control porcentaje-participante">
        </div>
    <?php endforeach; ?>

    <button type="submit" class="btn btn-primary">Crear Encuesta</button>
</form>

<?php include('../layouts/footer.php'); ?>
