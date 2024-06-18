<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Consultoría Informática</title>
    <link rel="stylesheet" href="styles.css">
    <style>


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


        nav a:hover {
            color: #f39c12;
        }

        #servicios {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .servicio {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        .servicio h3 {
            margin-top: 0;
            color: #333;
        }

        .servicio p {
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

    <section id="servicios">
        <h2>Servicios</h2>

        <?php
        // Array de servicios para mostrar dinámicamente
        $servicios = array(
            array(
                "titulo" => "Consultoría IT",
                "descripcion" => "Ofrecemos soluciones estratégicas para optimizar sus operaciones tecnológicas."
            ),
            array(
                "titulo" => "Desarrollo de Software",
                "descripcion" => "Desarrollamos software personalizado para satisfacer sus necesidades específicas."
            ),
            array(
                "titulo" => "Ciberseguridad",
                "descripcion" => "Protegemos sus sistemas y datos con soluciones avanzadas de ciberseguridad."
            ),
            array(
                "titulo" => "Soporte Técnico",
                "descripcion" => "Brindamos soporte técnico continuo para asegurar la operatividad de sus sistemas."
            ),
            array(
                "titulo" => "Implementación de Sistemas",
                "descripcion" => "Implementamos sistemas tecnológicos eficientes y adaptados a su empresa."
            )
        );

        // Mostrar cada servicio como un div con clase .servicio
        foreach ($servicios as $servicio) {
            echo '<div class="servicio">';
            echo '<h3>' . $servicio["titulo"] . '</h3>';
            echo '<p>' . $servicio["descripcion"] . '</p>';
            echo '</div>';
        }
        ?>

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
