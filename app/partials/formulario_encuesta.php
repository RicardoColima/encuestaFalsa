<!-- /partials/formulario_encuesta.php -->

<form action="crear_encuesta" method="POST">
    <div class="form-group">
        <label for="categoria">Categoría:</label>
        <select class="form-control" id="categoria" name="categoria" required>
            <!-- Aquí iría un ciclo para cargar las categorías de la base de datos -->
            <option value="1">Presidentes Municipales</option>
            <option value="2">Senadores</option>
            <option value="3">Diputados Locales</option>
        </select>
    </div>

    <div class="form-group">
        <label for="titulo">Título de la Encuesta:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>

    <div class="form-group">
        <label for="participantes">Participantes:</label>
        <select class="form-control" id="participantes" name="participantes[]" multiple required>
            <!-- Aquí iría un ciclo para cargar los participantes de la categoría seleccionada -->
            <option value="1">Juan Pérez</option>
            <option value="2">María López</option>
        </select>
    </div>

    <div class="form-group">
        <label for="porcentajes">Porcentaje Asignado:</label>
        <input type="text" class="form-control" id="porcentajes" name="porcentajes[]" required>
    </div>

    <button type="submit" class="btn btn-primary">Crear Encuesta</button>
</form>
