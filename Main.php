<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/Main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="input-form">
        <h2 class="Titulo">Registro de Compra</h2>
        <div class="row g-5" id="ola">
            <div class="col-md-5">
            <form method="post" action="assets/php/procesar.php">
                <label for="cedula">Cédula del Cliente:</label>
                <input type="text" class="form-control" name="cedula" id="cedula" required>
                <br>
                <label for="cantidad_botellones">Cantidad de Botellones:</label>
                <input type="number" class="form-control" name="cantidad_botellones" id="cantidad_botellones" required min=1>
                <br>
                <label for="litros_totales">Litros en Total Llenados:</label>
                <input type="number" class="form-control" name="litros_totales" id="litros_totales" required min=1>
                <br>
                
                <button class="w-50 btn btn-primary btn-lg" type="submit">Aceptar</button>
                </form>
            </div>
        </div>
        
    </div>
    <a href="assets/php/generar_pdf.php" class="btn btn-primary">Descargar PDF de Compras</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
