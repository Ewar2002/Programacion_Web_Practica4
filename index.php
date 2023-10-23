<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form method="post" action="assets/php/login.php">
            <input type="text" name="username" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
    <div id="error-popup" class="popup" style="display: none;">
        <p id="error-message"></p>
        <button id="close-popup">Cerrar</button>
    </div>
    <?php
    if (isset($_GET['error'])) {
        echo '<script>alert("' . $_GET['error'] . '");</script>';
    }
    ?>
</body>
</html>
