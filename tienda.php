<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - Consultoría Informática</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos CSS adicionales */

        .logo img {
            max-width: 50px;
            margin-right: 10px;
        }

        .logo h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        nav {
            text-align: center;
            margin-top: 10px;
        }


        nav a:hover {
            color: #f39c12;
        }

        .hero {
            background-image: url('hero-background.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .cta-button {
            display: inline-block;
            background-color: #f39c12;
            color: #fff;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #e78e0e;
        }

        .products {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .product {
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            width: 300px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }

        .product img {
            max-width: 100%;
            border-radius: 5px;
        }

        .product h3 {
            margin-top: 10px;
            color: #333;
        }

        .product p {
            color: #666;
            height: 80px; /* Limitar la altura del texto */
            overflow: hidden; /* Ocultar el exceso de texto */
            text-overflow: ellipsis; /* Mostrar puntos suspensivos */
        }

        .buy-button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .buy-button:hover {
            background-color: #555;
        }


        .social-media {
            margin-top: 10px;
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
        <a href="tienda.php" class="active">Tienda</a>
        <a href="login.php" class="login-link">Login</a>
    </nav>
</header>

<section id="inicio" class="hero">
    <div class="container">
        <h1>Bienvenido a nuestra tienda de productos informáticos</h1>
        <p>Encuentra los mejores productos para tus necesidades tecnológicas.</p>
        <a href="#productos" class="cta-button">Ver Productos</a>
    </div>
</section>

<section id="productos" class="products">
    <div class="product-category">
        <h2>Ratones</h2>
        <div class="products-list">
            <?php
            // Productos de la categoría Ratones
            $ratones = array(
                array(
                    'nombre' => 'Ratón Gaming Avanzado',
                    'imagen' => 'raton1.jpg',
                    'descripcion' => 'Ratón gaming con sensor óptico de alta precisión.'
                ),
                array(
                    'nombre' => 'Ratón Ergonómico Inalámbrico',
                    'imagen' => 'raton2.jpg',
                    'descripcion' => 'Ratón ergonómico inalámbrico para uso profesional.'
                ),
                array(
                    'nombre' => 'Ratón Vertical para Oficina',
                    'imagen' => 'Raton3.jpg',
                    'descripcion' => 'Ratón vertical diseñado para prevenir lesiones.'
                )
            );

            // Mostrar productos de ratones
            foreach ($ratones as $producto) {
                echo '<div class="product">';
                echo '<img src="' . $producto['imagen'] . '" alt="' . $producto['nombre'] . '">';
                echo '<h3>' . $producto['nombre'] . '</h3>';
                echo '<p>' . $producto['descripcion'] . '</p>';
                echo '<button class="buy-button">Comprar</button>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="product-category">
        <h2>Pantallas</h2>
        <div class="products-list">
            <?php
            // Productos de la categoría Pantallas
            $pantallas = array(
                array(
                    'nombre' => 'Monitor Curvo 27"',
                    'imagen' => 'pantalla1.jpg',
                    'descripcion' => 'Monitor curvo de 27 pulgadas, resolución 4K.'
                ),
                array(
                    'nombre' => 'Pantalla LED 24"',
                    'imagen' => 'pantalla2.jpg',
                    'descripcion' => 'Pantalla LED de 24 pulgadas, diseño delgado.'
                ),
                array(
                    'nombre' => 'Monitor Ultrawide 34"',
                    'imagen' => 'pantalla3.jpg',
                    'descripcion' => 'Monitor ultrawide de 34 pulgadas para multitarea.'
                )
            );

            // Mostrar productos de pantallas
            foreach ($pantallas as $producto) {
                echo '<div class="product">';
                echo '<img src="' . $producto['imagen'] . '" alt="' . $producto['nombre'] . '">';
                echo '<h3>' . $producto['nombre'] . '</h3>';
                echo '<p>' . $producto['descripcion'] . '</p>';
                echo '<button class="buy-button">Comprar</button>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="product-category">
        <h2>Ordenadores</h2>
        <div class="products-list">
            <?php
            // Productos de la categoría Ordenadores
            $ordenadores = array(
                array(
                    'nombre' => 'Ordenador Portátil Ultrabook',
                    'imagen' => 'ordenador1.jpg',
                    'descripcion' => 'Ordenador portátil ultrabook, ligero y potente.'
                ),
                array(
                    'nombre' => 'PC de Escritorio Gamer',
                    'imagen' => 'ordenador2.jpg',
                    'descripcion' => 'PC de escritorio gaming con tarjeta gráfica dedicada.'
                ),
                array(
                    'nombre' => 'Mini PC Compacto',
                    'imagen' => 'ordenador3.jpg',
                    'descripcion' => 'Mini PC compacto para espacios reducidos.'
                )
            );

            // Mostrar productos de ordenadores
            foreach ($ordenadores as $producto) {
                echo '<div class="product">';
                echo '<img src="' . $producto['imagen'] . '" alt="' . $producto['nombre'] . '">';
                echo '<h3>' . $producto['nombre'] . '</h3>';
                echo '<p>' . $producto['descripcion'] . '</p>';
                echo '<button class="buy-button">Comprar</button>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="product-category">
        <h2>Servidores</h2>
        <div class="products-list">
            <?php
            // Productos de la categoría Servidores
            $servidores = array(
                array(
                    'nombre' => 'Servidor Rack 1U',
                    'imagen' => 'servidor1.jpg',
                    'descripcion' => 'Servidor rack 1U para centros de datos.'
                ),
                array(
                    'nombre' => 'Servidor Torre de Alto Rendimiento',
                    'imagen' => 'servidor2.jpg',
                    'descripcion' => 'Servidor torre de alto rendimiento para empresas.'
                ),
                array(
                    'nombre' => 'Servidor en la Nube',
                    'imagen' => 'servidor3.jpg',
                    'descripcion' => 'Soluciones de servidor en la nube escalables.'
                )
            );

            // Mostrar productos de servidores
            foreach ($servidores as $producto) {
                echo '<div class="product">';
                echo '<img src="' . $producto['imagen'] . '" alt="' . $producto['nombre'] . '">';
                echo '<h3>' . $producto['nombre'] . '</h3>';
                echo '<p>' . $producto['descripcion'] . '</p>';
                echo '<button class="buy-button">Comprar</button>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="product-category">
        <h2>Switches</h2>
        <div class="products-list">
            <?php
            // Productos de la categoría Switches
            $switches = array(
                array(
                    'nombre' => 'Switch Gigabit 24 Puertos',
                    'imagen' => 'switch1.jpg',
                    'descripcion' => 'Switch Gigabit con 24 puertos Ethernet.'
                ),
                array(
                    'nombre' => 'Switch de Red Administrable',
                    'imagen' => 'switch2.jpg',
                    'descripcion' => 'Switch de red administrable con configuración avanzada.'
                ),
                array(
                    'nombre' => 'Switch PoE para Cámaras IP',
                    'imagen' => 'switch3.jpg',
                    'descripcion' => 'Switch PoE para alimentación de cámaras IP.'
                )
            );

            // Mostrar productos de switches
            foreach ($switches as $producto) {
                echo '<div class="product">';
                echo '<img src="' . $producto['imagen'] . '" alt="' . $producto['nombre'] . '">';
                echo '<h3>' . $producto['nombre'] . '</h3>';
                echo '<p>' . $producto['descripcion'] . '</p>';
                echo '<button class="buy-button">Comprar</button>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="product-category">
        <h2>Cables</h2>
        <div class="products-list">
            <?php
            // Productos de la categoría Cables
            $cables = array(
                array(
                    'nombre' => 'Cable Ethernet Cat 6',
                    'imagen' => 'cable1.jpg',
                    'descripcion' => 'Cable Ethernet Cat 6 de alta velocidad.'
                ),
                array(
                    'nombre' => 'Cable HDMI 4K',
                    'imagen' => 'cable2.jpg',
                    'descripcion' => 'Cable HDMI 4K para transmisión de audio y vídeo.'
                ),
                array(
                    'nombre' => 'Cable USB Tipo C',
                    'imagen' => 'cable3.jpg',
                    'descripcion' => 'Cable USB Tipo C para dispositivos modernos.'
                )
            );

            // Mostrar productos de cables
            foreach ($cables as $producto) {
                echo '<div class="product">';
                echo '<img src="' . $producto['imagen'] . '" alt="' . $producto['nombre'] . '">';
                echo '<h3>' . $producto['nombre'] . '</h3>';
                echo '<p>' . $producto['descripcion'] . '</p>';
                echo '<button class="buy-button">Comprar</button>';
                echo '</div>';
            }
            ?>
        </div>
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
