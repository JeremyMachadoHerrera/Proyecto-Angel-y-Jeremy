<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonios - Keymasters</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos adicionales para los testimonios */
        .testimonial-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }
        .testimonial-card {
            width: 300px;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .testimonial-card:hover {
            transform: scale(1.05);
        }
        .testimonial-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: block;
        }
        .testimonial-name {
            font-weight: bold;
            text-align: center;
        }
        .testimonial-text {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo de Keymasters">
            <h1>Keymasters</h1>
        </div>
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
        </nav>
    </header>
    <div class="container">
    <section class="testimonial-section">
        <h2>Testimonios de Clientes</h2>
        <div class="testimonial-container">
            <div class="testimonial-card">
                <img class="testimonial-image" src="imagenclient1.jpg" alt="Juan Pérez">
                <h3 class="testimonial-name">Juan Pérez</h3>
                <p class="testimonial-text">¡Excelente servicio! Me ayudaron a mejorar la seguridad de mi empresa de manera significativa.</p>
            </div>
            <div class="testimonial-card">
                <img class="testimonial-image" src="imagenclient2.jpg" alt="Elena Diaz Garcia">
                <h3 class="testimonial-name">Elena Diaz Garcia</h3>
                <p class="testimonial-text">El servicio proporcionado fue excepcional. Contribuyó significativamente a fortalecer la seguridad de mi empresa.</p>
            </div>
        </div>
    </section>
</div>
    <footer>
        <p>&copy; 2024 Keymasters. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
