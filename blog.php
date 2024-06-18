<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Consultoría Informática</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos específicos para esta página */


        .logo img {
            max-width: 50px;
            margin-right: 10px;
        }

        .logo h1 {
            margin: 0;
            font-size: 1.5rem;
        }


        nav a.active {
            font-weight: bold;
        }

        nav a:hover {
            color: #f39c12;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }


        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .blog-posts {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .blog-post {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .blog-post h3 {
            margin-top: 0;
            color: #333;
        }

        .blog-post p {
            color: #555;
        }

        .blog-post a {
            color: #f39c12;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .blog-post a:hover {
            color: #e78e0e;
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
        <div class="container">
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
                <a href="blog.php" class="active">Blog</a>
                <a href="tienda.php">Tienda</a>
                <a href="login.php" class="login-link">Login</a>
            </nav>
        </div>
    </header>

    <section class="blog-posts">
        <h2>Blog</h2>

        <?php
        // Ejemplo de artículos simulados, podrías obtener estos datos de una base de datos
        $articles = [
            [
                'title' => 'La inteligencia artificial recrea el cerebro de un roedor',
                'date' => '15 de Junio de 2024',
                'summary' => 'Científicos de Google DeepMind y la Universidad de Harvard crean una rata virtual y biomecánicamente realista para explorar el funcionamiento del cerebro y cómo controla el movimiento complejo...',
                'url' => 'https://www.elmundo.es/ciencia-y-salud/ciencia/2024/06/15/666875fcfc6c8347038b456e.html'
            ],
            [
                'title' => 'Android abrirá automáticamente las apps tras instalarlas',
                'date' => '17 de Junio de 2024',
                'summary' => 'Pequeños cambios que hacen la vida un poco más cómoda. Así se podría definir esta novedad, que llegará próximamente a Android (¿quizá de la mano de su futura versión 15?), y que desde luego no será una noticia de impacto, no copará decenas o incluso centenares de titulares, y será tan rápida y naturalmente asumida por el común de los usuarios de la plataforma que, en poco tiempo, prácticamente nadie recordará (al menos de manera consciente) que, con anterioridad, este proceso requería de una pulsación más....',
                'url' => 'https://www.muycomputer.com/2024/06/16/android-abrira-automaticamente-las-apps-tras-instalarlas/'
            ],
            [
                'title' => 'Gigabyte ha lanzado la caja AORUS C400 GLASS para gaming, sin diseño de vista panorámica',
                'date' => '14 de Junio de 2024',
                'summary' => 'Después de ver el disco SSD más rápido de la gama de la marca para jugadors de Gigabyte, el AORUS Gen5 14000, el fabricante aun tiene hueco para otro lanzamiento, una caja semitorre para PCs. La nueva caja AORUS C400 GLASS podemos decir que se aleja de la actual tendencia a las vistas panorámicas con frontal de cristal. Por otra parte también se atreve con un diseño de refrigeración de flujo vertical, el cual se ha mejorado para disipar mejor el calor interior....',
                'url' => 'https://www.geeknetic.es/Noticia/31993/Gigabyte-ha-lanzado-la-caja-AORUS-C400-GLASS-para-gaming-sin-diseno-de-vista-panoramica.html'
            ]
        ];

        // Recorrer los artículos y mostrar cada uno
        foreach ($articles as $article) {
            echo '<article class="blog-post">';
            echo '<h3>' . htmlspecialchars($article['title']) . '</h3>';
            echo '<p>Fecha de publicación: ' . htmlspecialchars($article['date']) . '</p>';
            echo '<p>' . htmlspecialchars($article['summary']) . '</p>';
            echo '<a href="' . htmlspecialchars($article['url']) . '" target="_blank">Leer más</a>';
            echo '</article>';
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
