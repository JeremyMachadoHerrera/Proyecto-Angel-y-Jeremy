<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo de Software - Consultoría Informática</title>
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

        .servicio {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }

        .servicio h3 {
            color: #333;
            margin-top: 0;
        }

        .servicio p {
            color: #666;
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
                <a href="nosotros.php" class="dropbtn">Nosotros</a>
                <div class="dropdown-content">
                    <a href="history.php">Nuestra Historia</a>
                    <a href="mision.php">Nuestra Misión</a>
                    <a href="equipo.php">Nuestro Equipo</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="servicios" class="dropbtn">Servicios</a>
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
        <h2>Desarrollo de Software</h2>
        <p>En Keymasters, ofrecemos servicios de desarrollo de software personalizados que se adaptan a las necesidades específicas de su negocio. Nuestro equipo de expertos en tecnología trabaja de cerca con usted para crear soluciones innovadoras y eficientes.</p>
        
        <div class="servicio">
            <h3>Desarrollo a Medida</h3>
            <p>Desarrollamos software a medida para satisfacer los requerimientos únicos de su empresa, garantizando una perfecta integración con sus operaciones.</p>
        </div>

        <div class="servicio">
            <h3>Aplicaciones Web</h3>
            <p>Construimos aplicaciones web robustas y escalables utilizando las últimas tecnologías, para asegurar un rendimiento óptimo y una excelente experiencia de usuario.</p>
        </div>

        <div class="servicio">
            <h3>Aplicaciones Móviles</h3>
            <p>Desarrollamos aplicaciones móviles para iOS y Android, diseñadas para ofrecer una funcionalidad y accesibilidad excepcionales a sus clientes y empleados.</p>
        </div>

        <div class="servicio">
            <h3>Integraciones de Sistemas</h3>
            <p>Nuestros servicios de integración de sistemas aseguran que todas sus plataformas de software trabajen juntas de manera coherente, mejorando la eficiencia y reduciendo los costos operativos.</p>
        </div>

        <div class="button-group">
            <a href="contact.php">Contáctanos</a>
            <a href="services.php">Ver Todos los Servicios</a>
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

    <!-- Script para mostrar/ocultar submenús -->
    <script>
        // Obtener todos los elementos <li> que contienen un submenú
        const menuItemsWithSubmenu = document.querySelectorAll('nav .dropdown');

        // Iterar sobre cada elemento para agregar el evento click
        menuItemsWithSubmenu.forEach(item => {
            // Agregar evento click al elemento <a> dentro de <div.dropdown>
            item.querySelector('.dropbtn').addEventListener('click', function(e) {
                // Evitar el comportamiento por defecto del enlace
                e.preventDefault();
                // Alternar la visibilidad del submenú (clase 'active')
                item.querySelector('.dropdown-content').classList.toggle('active');
            });
        });

        // Cerrar el submenú si se hace clic fuera de él
        document.addEventListener('click', function(e) {
            menuItemsWithSubmenu.forEach(item => {
                // Verificar si el clic fue fuera del elemento <div.dropdown> que contiene el submenú
                if (!item.contains(e.target)) {
                    item.querySelector('.dropdown-content').classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
