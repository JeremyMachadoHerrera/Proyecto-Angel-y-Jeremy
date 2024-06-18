<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonios de Clientes - Consultoría Informática</title>
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

        .testimonio {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f5f5f5;
            display: flex; /* Para alinear imagen y contenido */
        }

        .testimonio img {
            max-width: 100px; /* Tamaño máximo de la imagen */
            margin-right: 20px; /* Espaciado entre la imagen y el texto */
            border-radius: 50%; /* Borde redondeado para la imagen */
        }

        .testimonio blockquote {
            margin: 0;
            padding: 0;
        }

        .testimonio p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }

        .testimonio cite {
            display: block;
            margin-top: 10px;
            font-style: italic;
            color: #777;
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
                <a href="#" class="dropbtn">Nosotros</a>
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
            <a href="tienda.php">Tienda</a>
            <a href="login.php" class="login-link">Login</a>
        </nav>
    </header>

    <section class="full-page">
        <h2>Testimonios de Clientes</h2>
        <p>En Keymasters, nos enorgullecemos de las relaciones que hemos construido con nuestros clientes. Aquí hay algunas de sus historias de éxito y comentarios sobre nuestros servicios.</p>
        
        <div class="testimonio">
            <img src="cliente1.jpg" alt="Cliente 1">
            <blockquote>
                <p>"Keymasters ha transformado completamente nuestra infraestructura IT. Su equipo es increíblemente profesional y siempre está disponible para ayudarnos."</p>
                <cite>- Juan Pérez, CEO de Tech Solutions</cite>
            </blockquote>
        </div>

        <div class="testimonio">
            <img src="cliente5.jpg" alt="Cliente 2">
            <blockquote>
                <p>"Gracias a Keymasters, nuestra empresa ha podido optimizar sus procesos y mejorar la eficiencia operativa. No podríamos estar más satisfechos con sus servicios."</p>
                <cite>- María Gómez, Directora de Operaciones en Innovatech</cite>
            </blockquote>
        </div>

        <div class="testimonio">
            <img src="cliente3.jpg" alt="Cliente 3">
            <blockquote>
                <p>"La experiencia y conocimientos del equipo de Keymasters nos han ayudado a superar desafíos complejos en nuestra transformación digital. Los recomendamos encarecidamente."</p>
                <cite>- Carlos Rodríguez, CTO de FutureCorp</cite>
            </blockquote>
        </div>

        <div class="testimonio">
            <img src="cliente6.jpg" alt="Cliente 4">
            <blockquote>
                <p>"Su enfoque personalizado y soluciones innovadoras nos han permitido mantener una ventaja competitiva en el mercado. Keymasters es nuestro socio de confianza en IT."</p>
                <cite>- Ana Martínez, Gerente de Proyectos en GlobalTech</cite>
            </blockquote>
        </div>

        <div class="button-group">
            <a href="contacto.php">Contáctanos</a>
            <a href="servicios.php">Ver Todos los Servicios</a>
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
