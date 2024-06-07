<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo - Keymasters</title>
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
            <h2>Equipo</h2>
            <div class="card">
                <img src="imagenes/Angel.jpg" alt="Angel de la Hoz" class="team-photo">
                <h3>Angel de la Hoz</h3>
                <p>CEO y Fundador</p>
                <p>Juan tiene más de 20 años de experiencia en el sector de TI y es el fundador de Keymasters.</p>
            </div>
            <div class="card">
                <img src="images/maria_garcia.jpg" alt="María García" class="team-photo">
                <h3>Jeremy Jesus Machado Herrera</h3>
                <p>CTO</p>
                <p>María es la directora de tecnología y lidera el desarrollo de nuestras soluciones innovadoras.</p>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Keymasters. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
