<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Realiza la conexión a la base de datos (debes proporcionar tus propios datos de conexión).
    $db = new mysqli('localhost:3306', 'root', '', 'bdd_edward');

    if ($db->connect_error) {
        die("Error de conexión: " . $db->connect_error);
    }

    // Realiza una consulta para verificar las credenciales.
    $query = "SELECT * FROM botellonx_usuarios WHERE Name = '$username' AND Contraseña = '$password'";
    $result = $db->query($query);

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso
        // Redirigir a bienvenido.php
        header("Location: http://localhost/Practica4/Main.php");
    } else {
        // Credenciales incorrectas, redirigir a index.php con un mensaje de error
        header("Location: http://localhost/Practica4/index.php?error=Credenciales incorrectas");
    }

    $db->close();
}
?>
