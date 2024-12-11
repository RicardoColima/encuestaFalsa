<!-- /participantes/crear.php -->

<?php include('../layouts/header.php'); ?>

<!-- Título y descripción de la página -->
<h2>Registrar Nuevo Participante</h2>
<p>Complete el formulario a continuación para agregar un nuevo participante a la encuesta.</p>

<!-- Formulario para registrar un participante -->
<form action="/participantes/guardar" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Participante</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    
    <div class="mb-3">
        <label for="municipio" class="form-label">Municipio/Distrito</label>
        <input type="text" class="form-control" id="municipio" name="municipio" required>
    </div>

    <div class="mb-3">
        <label for="cargo" class="form-label">Cargo al que Aspira</label>
        <select class="form-control" id="cargo" name="cargo" required>
            <option value="">Seleccione un cargo</option>
            <option value="Presidentes Municipales">Presidentes Municipales</option>
            <option value="Senadores">Senadores</option>
            <option value="Diputados Locales">Diputados Locales</option>
            <!-- Agregar más opciones según sea necesario -->
        </select>
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto del Participante</label>
        <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
    </div>

    <div class="mb-3">
        <label for="categoria" class="form-label">Categoría</label>
        <select class="form-control" id="categoria" name="categoria" required>
            <option value="">Seleccione una categoría</option>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?= $categoria['id']; ?>"><?= $categoria['nombre']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Registrar Participante</button>
</form>

<?php include('../layouts/footer.php'); ?>
