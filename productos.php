<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Tienda de Ordenadores y Teclados</title>
    <link rel="stylesheet" href="css">
    <style>
        /* Estilos específicos para esta página */
        /* Otras reglas CSS ... */

        .productos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Ajusta automáticamente el número de columnas según el ancho del contenedor */
            gap: 20px; /* Espacio entre las celdas de la cuadrícula */
        }

        .producto {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }

        .producto img {
            max-width: 100%;
            height: auto;
        }

        /* Otras reglas CSS ... */

        /* Agrega aquí las reglas CSS que aplicaste en el index.php */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        header nav ul li {
            margin-right: 20px;
        }

        header nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        main {
            padding: 20px 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-top: 50px;
        }

        .logo-img {
            width: 50px; /* Ancho deseado */
            height: auto; /* Para mantener la proporción original */
            margin-top: 10px; /* Bajar un poco el logo */
        }

        .company-name {
            margin-left: 20px; /* Espacio entre el logo y el nombre de la empresa */
            color: white; /* Color de texto deseado */
            margin-top: -10px; /* Subir un poco el título de la empresa */
        }

        h2 {
            margin-bottom: 20px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Contenido de la página -->
    <header>
        <div class="container">
            <div class="logo">
                <!-- Agrega tu logo aquí -->
                <img src="logo.png" alt="Logo de la tienda" class="logo-img">
                <span class="company-name">KEY MASTERS</span>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="quienessomos.php">Quiénes Somos</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="contactanos.php">Contacto</a></li>
                    <li><a href="tienda.php">Tienda</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="productos">
            <div class="container">
                <!-- Itera sobre los productos y muestra cada uno en una celda de la cuadrícula -->
                <?php foreach ($productos as $producto): ?>
                    <div class="producto">
                        <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                        <h3><?php echo $producto['nombre']; ?></h3>
                        <p class="precio">$<?php echo $producto['precio']; ?></p>
                        <a href="?agregar=<?php echo $producto['id']; ?>" class="btn">Agregar al Carrito</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <!-- Más contenido de la página aquí -->
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 KeyMasters. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
