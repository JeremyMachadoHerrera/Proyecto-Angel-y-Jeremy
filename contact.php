<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Keymasters</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Keymasters</h1>
        <nav>
        <a href="index.php">Inicio</a>
            <div class="dropdown">
                <a href="about.php" class="dropbtn">Sobre Nosotros</a>
                <div class="dropdown-content">
                    <a href="history.php">Nuestra Historia</a>
                    <a href="mission.php">Nuestra Misión</a>
                    <a href="team.php">Nuestro Equipo</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="services.php" class="dropbtn">Servicios</a>
                <div class="dropdown-content">
                    <a href="testimoniosdeclientes.php">Testimonios de Clientes</a> <!-- Enlace agregado -->
                    <a href="consulting.php">Consultoría</a>
                    <a href="development.php">Desarrollo</a>
                    <a href="support.php">Soporte</a>
                </div>
            </div>
            <a href="contact.php">Contacto</a>
            <a href="blog.php">Blog</a>
            <a href="login.php" class="login-link">Login</a> <!-- Enlace directo a la página de inicio de sesión -->
        </nav>
    </header>
    <div class="container">
        <section class="contact">
            <h2>Contáctanos</h2>
            <p>Estamos aquí para ayudarte. Llena el siguiente formulario y nos pondremos en contacto contigo lo antes posible.</p>
            <form action="process_contact.php" method="post">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Asunto:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" value="Enviar Mensaje">
                </div>
            </form>
        </section>

        <section class="contact-info-container">
            <div class="contact-info">
                <h2>Información de Contacto</h2>
                <p>También puedes contactarnos a través de los siguientes medios:</p>
                <ul>
                    <li><strong>Teléfono:</strong> +34 123 456 789</li>
                    <li><strong>Email:</strong> info@keymasters.com</li>
                    <li><strong>Dirección:</strong> Calle Falsa 123, Ciudad, País</li>
                </ul>
            </div>
            <div class="map">
                <h3>Ubicación</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.847304002263!2d-46.63529528502274!3d-23.55653248468315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59b4d8d8f3fb%3A0x2e2e2e0d6b6e7e6d!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%20Brazil!5e0!3m2!1sen!2sus!4v1613833240541!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Keymasters. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
