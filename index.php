<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Consultoría Informática</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="Logo de Keymasters">
            <h1>Keymasters</h1>
        </div>
        <nav>
            <a href="index.php" class="active">Inicio</a>
            <div class="dropdown">
                <a href="nosotros.php" class="dropbtn">Sobre Nosotros</a>
                <div class="dropdown-content">
                    <a href="history.php">Nuestra Historia</a>
                    <a href="mision.php">Nuestra Misión</a>
                    <a href="equipo.php">Nuestro Equipo</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="servicios.php" class="dropbtn">Servicios</a>
                <div class="dropdown-content">
                    <a href="testimoniosdeclientes.php">Testimonios de Clientes</a>
                    <a href="consultoria.php">Consultoría</a>
                    <a href="desarrollo.php">Desarrollo</a>
                    <a href="soporte.php">Soporte</a>
                </div>
            </div>
            <a href="contacto.php">Contacto</a>
            <a href="blog.php">Blog</a>
            <a href="tienda.php">Tienda</a>
            <a href="login.php" class="login-link">Login</a>
        </nav>
    </div>
</header>

<section id="inicio" class="hero">
    <div class="hero-content">
        <h1>Bienvenidos a Keymasters</h1>
        <p>Vuestra consultoría de confianza en soluciones tecnológicas.</p>
        <a href="contacto.php" class="cta-button">Contáctanos</a>
    </div>
</section>

<section id="resumen-servicios">
    <div class="container">
        <h2>Servicios Destacados</h2>
        <div class="servicios">
            <div class="servicio">
                <h3>Consultoría IT</h3>
                <p>Ofrecemos soluciones estratégicas para optimizar sus operaciones tecnológicas.</p>
            </div>
            <div class="servicio">
                <h3>Desarrollo de Software</h3>
                <p>Desarrollamos software personalizado para satisfacer sus necesidades específicas.</p>
            </div>
            <div class="servicio">
                <h3>Ciberseguridad</h3>
                <p>Protegemos sus sistemas y datos con soluciones avanzadas de ciberseguridad.</p>
            </div>
        </div>
    </div>
</section>

<section id="caracteristicas">
    <div class="container">
        <h2>Nuestras Características</h2>
        <div class="caracteristicas">
            <div class="caracteristica">
                <img src="innovacion.png" alt="Innovación">
                <h3>Innovación</h3>
                <p>Nos mantenemos a la vanguardia de la tecnología para ofrecerte lo mejor.</p>
            </div>
            <div class="caracteristica">
                <img src="calidad.png" alt="Calidad">
                <h3>Calidad</h3>
                <p>Proveemos servicios y productos de la más alta calidad.</p>
            </div>
            <div class="caracteristica">
                <img src="soporte.png" alt="Soporte">
                <h3>Soporte</h3>
                <p>Nuestro equipo de soporte está siempre disponible para ayudarte.</p>
            </div>
        </div>
    </div>
</section>

<section id="testimonios">
    <div class="container">
        <h2>Testimonios</h2>
        <div class="testimonios">
            <div class="testimonio">
                <blockquote>
                    <p>"La mejor consultoría informática con la que hemos trabajado. Altamente recomendados."</p>
                    <cite>- Cliente Satisfecho</cite>
                </blockquote>
            </div>
            <div class="testimonio">
                <blockquote>
                    <p>"Su equipo de desarrollo es increíblemente talentoso. Nos entregaron un producto de alta calidad."</p>
                    <cite>- Empresa Innovadora</cite>
                </blockquote>
            </div>
            <div class="testimonio">
                <blockquote>
                    <p>"Gracias a su consultoría IT, hemos optimizado nuestras operaciones y reducido costos significativamente."</p>
                    <cite>- Compañía Eficiente</cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<section id="boletin">
    <div class="container">
        <h2>Suscríbete a nuestro boletín</h2>
        <form action="suscripcion.php" method="post" class="suscripcion-form">
            <input type="email" name="email" placeholder="Tu correo electrónico" required>
            <button type="submit" class="cta-button">Suscribirme</button>
        </form>
    </div>
</section>

<footer>
        <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <p>&copy; 2024 Keymasters. Todos los derechos reservados.</p>
    </footer>

<script src="scripts.js"></script>
</body>
</html>
