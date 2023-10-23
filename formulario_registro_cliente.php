<?php
    $cantidad_botellones = $_GET['cantidad_botellones'];
    $litros_totales = $_GET['litros_totales'];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="input-form">
        <h2>Registro de Cliente</h2>
        <form method="post" action="assets/php/registrar_cliente.php">
            <input type="hidden" name="cantidad_botellones" value="<?= $cantidad_botellones ?>">
            <input type="hidden" name="litros_totales" value="<?= $litros_totales ?>">
            <label for="cedula">Cedula:</label>
            <input type="text" name="cedula" readonly value="<?= isset($_GET['cedula']) ? $_GET['cedula'] : ''; ?>">
            <br>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
            <br>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" required>
            <br>
            <label for="ubicacion">Ubicación:</label>
            <input type="text" name="ubicacion" id="ubicacion" required>
            <br>
            <button type="submit">Registrar Cliente</button>
        </form>
    </div>
</body>
</html>
