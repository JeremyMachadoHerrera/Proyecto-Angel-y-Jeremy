<?php
// Inicia la sesión
session_start();

// Verifica si el usuario ya inició sesión
if (isset($_SESSION['usuario'])) {
    // Si el usuario ya inició sesión, redirige a la página de inicio
    header("Location: login.php");
    exit; // Asegura que el script se detenga después de la redirección
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Keymasters</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <div class="logo">
            <img src="logo.png" alt="Logo de Keymasters" >
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
            <a href="login.php" class="login-link">Login</a> <!-- Enlace directo a la página de inicio de sesión -->
        </nav>
    </header>
    <div class="container">
        <section>
            <h2>Bienvenidos a Keymasters</h2>
            <p>Keymasters es una consultoría informática especializada en brindar soluciones tecnológicas avanzadas para su empresa.</p>
            <p>Ofrecemos una amplia gama de servicios, incluyendo consultoría, desarrollo de software y soporte técnico.</p>
        </section>

        <section class="features">
            <h2>Nuestros Servicios Destacados</h2>
            <div class="card">
                <h3>Consultoría Especializada</h3>
                <p>Proveemos asesoramiento experto para optimizar su infraestructura tecnológica y mejorar su eficiencia operativa.</p>
            </div>
            <div class="card">
                <h3>Desarrollo de Software a Medida</h3>
                <p>Desarrollamos soluciones de software personalizadas para satisfacer las necesidades únicas de su negocio.</p>
            </div>
            <div class="card">
                <h3>Soporte Técnico 24/7</h3>
                <p>Nuestro equipo de soporte está disponible en todo momento para resolver cualquier problema técnico que pueda surgir.</p>
            </div>
        </section>

        <section class="cta">
            <h2>¿Listo para Transformar su Negocio?</h2>
            <p>Contáctenos hoy para descubrir cómo nuestras soluciones tecnológicas pueden impulsar su empresa hacia el éxito.</p>
            <a href="contact.php" class="btn">Contáctenos</a>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Keymasters. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
