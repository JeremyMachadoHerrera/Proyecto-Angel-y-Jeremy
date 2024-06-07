<?php
session_start();
require_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    $sql = "SELECT * FROM usuarios WHERE email = ? AND contrasena = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ss", $email, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Usuario autenticado, redirigir a la página deseada
        $_SESSION["email"] = $email;
        header("Location: index.php");
        exit();
    } else {
        $error = "Credenciales inválidas. Por favor, inténtalo de nuevo.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Keymasters</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <!-- Encabezado de tu página -->
    </header>
    <div class="container">
        <section>
            <h2>Iniciar sesión</h2>
            <?php if(isset($error)) { ?>
                <div class="error"><?php echo $error; ?></div>
            <?php } ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required><br>
                <button type="submit">Iniciar sesión</button>
            </form>
        </section>
    </div>
    <footer>
        <!-- Pie de página de tu página -->
    </footer>
</body>
</html>

