<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - KeyMasters</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        header nav ul li {
            margin-right: 20px;
        }

        header nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        main {
            padding: 20px 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-top: 50px;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* Estilos para el formulario de contacto */
        form {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 20px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
        }

        .logo-img {
            width: 50px; 
            height: auto; 
            margin-top: 10px; 
        }

        .company-name {
            margin-left: 20px; 
            color: white; 
            margin-top: -10px; 
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <!-- Logo actualizado y centrado -->
                <img src="logo.png" alt="Logo de KeyMasters" class="logo-img">
                <span class="company-name">KeyMasters</span>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="quienessomos.php">Quiénes Somos</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="contactanos.php">Contacto</a></li>
                    <li><a href="tienda.php">Tienda</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="contacto">
            <div class="container">
                <h2>Contacta con Nosotros</h2>
                <p>¡Estamos aquí para ayudarte! Ponte en contacto con nosotros para obtener más información sobre nuestros productos y servicios.</p>
                <table>
                    <tr>
                        <th>Email de Contacto</th>
                        <td>info@KeyMasters.com</td>
                    </tr>
                    <tr>
                        <th>Dirección</th>
                        <td>Calle Ejemplo, Número 123, Ciudad, País</td>
                    </tr>
                    <tr>
                        <th>Ubicación</th>
                        <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19482.67427335102!2d-3.8669796491025337!3d43.4581574659929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd49490a0e530f5f%3A0x68d6e24fc428f5b1!2sAlisal%2C%2039011%20Santander%2C%20Cantabria!5e0!3m2!1ses!2ses!4v1716572283850!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                    </tr>
                </table>

                <!-- Formulario de contacto -->
                <form action="procesar_contacto.php" method="POST">
                    <?php
                    // Verificar si hay errores en los campos vacíos
                    if (isset($_GET["error"]) && $_GET["error"] == "empty_fields") {
                        echo "<p class='error-message'>Por favor, rellena todos los campos.</p>";
                    }
                    ?>
                    
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 KeyMasters. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
