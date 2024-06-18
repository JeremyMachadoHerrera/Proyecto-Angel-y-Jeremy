<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Misión - Keymasters</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Asegura que el contenido ocupe al menos el 100% de la altura visible */
        }

        /* Header y contenido principal */
        header {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .logo img {
            max-width: 100px;
            vertical-align: middle;
        }

        .logo h1 {
            font-size: 24px;
            font-weight: bold;
            display: inline-block;
            margin: 0;
            vertical-align: middle;
        }

        nav {
            text-align: center;
            margin-top: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            margin: 0 15px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #f39c12;
        }

        .container {
            flex: 1; /* Esto hace que el contenido ocupe todo el espacio disponible */
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .container h1 {
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .container p {
            font-size: 18px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
        }

        .container a {
            color: #f39c12;
            text-decoration: none;
        }

        .container a:hover {
            text-decoration: underline;
        }

        .features {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .feature {
            flex: 1;
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-5px);
        }

        .feature h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .feature p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
        }

        .mission-statement {
            background-color: #f39c12;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 40px;
        }

        .mission-statement h2 {
            font-size: 28px;
            margin-bottom: 10px;
            text-align: center;
        }

        .mission-statement p {
            font-size: 18px;
            line-height: 1.6;
            text-align: center;
        }

        footer {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            width: 100%;
        }

        .social-media {
            margin-top: 10px;
        }

        .social-media a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 18px;
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
                <a href="#" class="dropbtn">Servicios</a>
                <div class="dropdown-content">
                    <a href="testimoniosdeclientes.php">Testimonios de Clientes</a>
                    <a href="consultoria.php">Consultoría</a>
                    <a href="desarrollo.php">Desarrollo</a>
                    <a href="support.php">Soporte</a>
                </div>
            </div>
            <a href="contacto.php">Contacto</a>
            <a href="blog.php">Blog</a>
            <a href="Tienda.php">Tienda</a>
            <a href="login.php" class="login-link">Login</a>
        </nav>
    </header>

    <div class="container">
        <h1>Nuestra Misión</h1>
        <p>En Keymasters, nos dedicamos a proporcionar soluciones tecnológicas innovadoras y de calidad que impulsen el crecimiento y el éxito de nuestros clientes. Estamos comprometidos con la excelencia, la integridad y el servicio al cliente, creando relaciones sólidas basadas en la confianza y el profesionalismo.</p>
        
        <div class="features">
            <div class="feature">
                <h3>Innovación</h3>
                <p>Nos mantenemos a la vanguardia de la tecnología para ofrecer soluciones innovadoras.</p>
            </div>
            <div class="feature">
                <h3>Calidad</h3>
                <p>Garantizamos estándares de calidad en cada proyecto y servicio que entregamos.</p>
            </div>
            <div class="feature">
                <h3>Compromiso</h3>
                <p>Nuestro compromiso es satisfacer las necesidades de nuestros clientes con profesionalismo.</p>
            </div>
        </div>

        <div class="mission-statement">
            <h2>Declaración de Misión Ampliada</h2>
            <p>En Keymasters, no solo proporcionamos servicios tecnológicos avanzados, sino que también nos esforzamos por construir relaciones duraderas con nuestros clientes, entendiendo sus necesidades específicas y ofreciendo soluciones personalizadas que impulsan su crecimiento y eficiencia operativa. Nuestro compromiso con la innovación y la calidad nos distingue en el mercado, garantizando resultados excepcionales y sostenibles.</p>
        </div>

        <p>Vuelve a <a href="nosotros.php">Sobre Nosotros</a></p>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Keymasters. Todos los derechos reservados.</p>
        <div class="social-media">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
        </div>
    </footer>
</body>
</html>
