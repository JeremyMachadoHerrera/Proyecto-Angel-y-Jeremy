<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoría - Keymasters</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos específicos para esta página */


        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .logo img {
            max-width: 50px;
            margin-right: 10px;
        }

        .logo h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        nav {
            background-color: #444;
            text-align: center;
            padding: 10px 0;
        }



        nav a:hover {
            color: #f39c12;
        }

        .full-page {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .full-page h2 {
            margin-top: 0;
            color: #333;
        }

        .full-page p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }

        .button-group {
            text-align: center;
            margin-top: 20px;
        }

        .button-group a {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #f39c12;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button-group a:hover {
            background-color: #e78e0e;
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
    </header>

    <section class="full-page">
        <h2>Consultoría IT</h2>
        <p>Nuestra consultoría IT ofrece servicios personalizados para ayudar a su empresa a optimizar sus operaciones tecnológicas. Contamos con un equipo de expertos que trabajarán con usted para identificar áreas de mejora y proporcionar soluciones estratégicas.</p>
        <div class="button-group">
            <a href="contacto.php">Contáctenos</a>
        </div>
    </section>

    <footer>
        <div class="social-media">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
        </div>
        <p>&copy; 2024 Consultoría Informática. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
