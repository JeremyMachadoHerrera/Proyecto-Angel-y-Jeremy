<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestro Equipo - Keymasters</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos específicos para esta página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .team-member {
            text-align: center;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        .team-member img {
            max-width: 100%;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .team-member h2 {
            margin: 10px 0;
            font-size: 1.2rem;
            color: #333;
        }

        .team-member p {
            color: #666;
        }


        .social-media a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .social-media a:hover {
            color: #f39c12;
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
                <a href="nosotros.php" class="dropbtn">Nosotros</a>
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
                    <a href="support.php">Soporte</a>
                </div>
            </div>
            <a href="contacto.php">Contacto</a>
            <a href="blog.php">Blog</a>
            <a href="tienda.php">Tienda</a>
            <a href="login.php" class="login-link">Login</a>
        </nav>
    </header>

    <section class="container">
        <h1>Nuestro Equipo</h1>

        <div class="team-member">
            <img src="jeremy.jpg" alt="Miembro del equipo 1">
            <h2>Jeremy Jesus Machado Herrera</h2>
            <p>CEO y Fundador</p>
        </div>

        <div class="team-member">
            <img src="Angel.jpg" alt="Miembro del equipo 2">
            <h2>Angel de la hoz</h2>
            <p>Desarrollador Frontend</p>
        </div>

        <!-- Agrega más miembros según sea necesario -->

        <p>Vuelve a <a href="nosotros.php">Sobre Nosotros</a></p>
    </section>

    <footer>
        <div class="social-media">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
        </div>
        <p>&copy; 2024 Keymasters. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
