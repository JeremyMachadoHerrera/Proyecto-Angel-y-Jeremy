<?php
// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos del formulario están vacíos
    if (empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["mensaje"])) {
        // Si uno o más campos están vacíos, redirigir a la página de contacto con un mensaje de error
        header("Location: contactanos.php?error=empty_fields");
        exit;
    } else {
        // Si todos los campos están completos, obtener los datos del formulario
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];

        // Aquí podrías realizar cualquier otra acción con los datos, como enviar un correo electrónico, almacenarlos en una base de datos, etc.

        // Redirigir al usuario a la página donde se muestran los datos
        header("Location: datos_contacto.php?nombre=$nombre&email=$email&mensaje=$mensaje");
        exit;
    }
} else {
    // Si no se han enviado los datos, redirigir a la página de contacto
    header("Location: contactanos.php");
    exit;
}
?>
