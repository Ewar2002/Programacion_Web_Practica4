<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cantidad_botellones = $_POST['cantidad_botellones'];
    $litros_totales = $_POST['litros_totales'];
    $cedula = $_POST['cedula'];

    // Realiza la conexión a la base de datos (debes proporcionar tus propios datos de conexión).
    $db = new mysqli('localhost:3306', 'root', '', 'bdd_edward');

    if ($db->connect_error) {
        die("Error de conexión: " . $db->connect_error);
    }

    // Verificar si la cédula ya está registrada en la base de datos
    $query = "SELECT * FROM botellonx_clientes WHERE Cedula = '$cedula'";
    $result = $db->query($query);

    } else {
        echo "No se encontraron resultados para la cédula: " . $cedula;
    }

    if ($result->num_rows == 0) {
        // La cédula no está registrada, mostrar otro formulario para registrar al cliente
        header('Location: http://localhost/Practica4/formulario_registro_cliente.php?cedula=' . $cedula . '&cantidad_botellones=' . $cantidad_botellones . '&litros_totales=' . $litros_totales);
    } else {
        // La cédula está registrada, guardar la compra en la tabla "botellonx_botellones"
        date_default_timezone_set('America/Caracas');
        $fecha_hora = date('d-m-Y h:i a');
        $query = "INSERT INTO botellonx_botellones ( Cantidad, Total_Lts, Fecha_Hora, Cedula) 
                  VALUES ($cantidad_botellones, $litros_totales, '$fecha_hora','$cedula')";

        if ($db->query($query) === TRUE) {
            echo "Compra registrada exitosamente.";
        } else {
            echo "Error al registrar la compra: " . $db->error;
        }
    }

    $db->close();

?>
