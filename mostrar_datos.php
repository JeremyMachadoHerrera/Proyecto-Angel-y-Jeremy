<?php
session_start();

// Verificar si existen datos en la sesión
if (!isset($_SESSION['contacto'])) {
    header('Location: contacto.php');
    exit;
}

// Obtener los datos de la sesión
$datos = $_SESSION['contacto'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Contacto</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h2>Datos de Contacto</h2>
    <table>
        <tr>
            <th>Campo</th>
            <th>Dato</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo htmlspecialchars($datos['nombre']); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($datos['email']); ?></td>
        </tr>
        <tr>
            <td>Mensaje</td>
            <td><?php echo nl2br(htmlspecialchars($datos['mensaje'])); ?></td>
        </tr>
    </table>
</body>
</html>

<?php
// Limpiar y destruir la sesión después de mostrar los datos
unset($_SESSION['contacto']);
session_destroy();
?>
