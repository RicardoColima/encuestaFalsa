<!-- /auth/login.php -->

<?php include('../layouts/header.php'); ?>

<h2>Login</h2>
<p>Por favor, ingresa tus credenciales para acceder al sistema.</p>

<form action="login" method="POST">
    <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
</form>

<?php include('../layouts/footer.php'); ?>
