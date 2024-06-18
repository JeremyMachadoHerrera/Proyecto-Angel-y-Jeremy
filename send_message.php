<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Envío - Consultoría Informática</title>
    <link rel="stylesheet" href="styles.css"> <!-- Estilos generales -->
    <style>
        /* Estilos específicos para esta página */
        

        header .logo {
            display: flex; /* Alineación vertical del logo y título */
            align-items: center;
            margin-left: 20px;
            font-weight: bold;
            font-size: 24px;
        }

        header .logo img {
            height: 40px; /* Tamaño del logo */
            margin-right: 10px; /* Espaciado con el texto */
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: flex-end;
            margin-right: 20px;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #f39c12;
        }

        #confirmacion {
            flex: 1; /* Hacer que este contenedor ocupe el espacio restante */
            padding: 40px 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 20px;
        }

        #confirmacion h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        #confirmacion .confirmacion-mensaje {
            text-align: center;
            margin-bottom: 20px;
        }

        #confirmacion .confirmacion-mensaje p {
            font-size: 18px;
            margin-bottom: 10px;
        }


        footer .social-media {
            margin-bottom: 10px;
        }

        footer .social-media a {
            display: inline-block;
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer .social-media a:hover {
            color: #f39c12;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo de Keymasters"> <!-- Logo -->
            <h1>Keymasters</h1> <!-- Título -->
        </div>
        <nav>
            <ul>
                <!-- Opciones de navegación -->
                <li><a href="index.php">Inicio</a></li>
                <li class="dropdown">
                    <a href="nosotros.php" class="dropbtn">Nosotros</a>
                    <div class="dropdown-content">
                        <a href="history.php">Nuestra Historia</a>
                        <a href="mision.php">Nuestra Misión</a>
                        <a href="equipo.php">Nuestro Equipo</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="servicios.php" class="dropbtn">Servicios</a>
                    <div class="dropdown-content">
                        <a href="testimoniosdeclientes.php">Testimonios de Clientes</a>
                        <a href="consultoria.php">Consultoría</a>
                        <a href="desarrollo.php">Desarrollo</a>
                        <a href="support.php">Soporte</a>
                    </div>
                </li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="tienda.php">Tienda</a></li>
                <li><a href="login.php" class="login-link">Login</a></li>
            </ul>
        </nav>
    </header>

    <section id="confirmacion">
        <div class="confirmacion-mensaje">
            <h2>Mensaje Enviado</h2>
            <p>Gracias por contactarnos.</p>
            <p>Nos pondremos en contacto contigo pronto.</p>
        </div>
    </section>

    <footer>
        <div class="social-media">
            <!-- Enlaces a redes sociales -->
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
            <a href="#">Instagram</a>
        </div>
        <p>&copy; 2024 Consultoría Informática. Todos los derechos reservados.</p>
        <p>Cuenta de Instagram: @keymasters</p>
    </footer>
</body>
</html>
