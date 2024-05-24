<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Contacto</title>
</head>
<body>
    <h2>Datos enviados desde el formulario de contacto:</h2>
    <?php
    // Mostrar los datos recibidos del formulario
    if (isset($_GET['nombre']) && isset($_GET['email']) && isset($_GET['mensaje'])) {
        $nombre = $_GET['nombre'];
        $email = $_GET['email'];
        $mensaje = $_GET['mensaje'];
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Mensaje:</strong> $mensaje</p>";
    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>
</body>
</html>
