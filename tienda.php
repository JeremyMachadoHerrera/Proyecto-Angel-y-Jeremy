<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - Key Masters</title>
    <link rel="stylesheet" href="css">
    <style>
        .logo-img {
            width: 50px;
            height: auto;
            margin-top: 10px;
        }

        .company-name {
            margin-left: 20px;
            color: white;
            margin-top: -10px;
        }

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

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .product-card {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .product-card img {
            width: 100%;
            max-width: 200px;
            height: auto;
        }

        .product-card h3 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .product-card p {
            margin-bottom: 10px;
        }

        .product-card .price {
            color: #007bff;
            font-weight: bold;
        }

        .product-card .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .product-card .btn:hover {
            background-color: #0056b3;
        }

        .search-bar {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-bar input {
            padding: 10px;
            width: calc(100% - 150px);
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-bar button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-bar button:hover {
            background-color: #0056b3;
        }

        .category-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            margin-bottom: 20px;
        }

        .category-list li {
            margin-bottom: 10px;
        }

        .category-list a {
            text-decoration: none;
            color: #007bff;
        }

        .category-list a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Logo de Key Masters" class="logo-img">
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
        <section id="search_and_categories">
            <div class="container">
                <div class="search-bar">
                    <input type="text" placeholder="Buscar productos...">
                    <button>Buscar</button>
                </div>
                <ul class="category-list">
                    <li><a href="#">Ordenadores</a></li>
                    <li><a href="#">Teclados</a></li>
                    <li><a href="#">Accesorios</a></li>
                    <li><a href="#">Monitores</a></li>
                </ul>
            </div>
        </section>

        <section id="productos_destacados">
            <div class="container">
                <h2>Productos Destacados</h2>
                <div class="product-card">
                    <img src="laptop.jpg" alt="Ordenador Portátil">
                    <h3>Ordenador Portátil</h3>
                    <p class="price">$899.99</p>
                    <p>Ordenador portátil de alta gama con las últimas especificaciones técnicas.</p>
                    <a href="#" class="btn">Agregar al Carrito</a>
                </div>
                <div class="product-card">
                    <img src="teclado.jpg" alt="Teclado Mecánico">
                    <h3>Teclado Mecánico</h3>
                    <p class="price">$129.99</p>
                    <p>Teclado mecánico con iluminación RGB y switches de alta calidad.</p>
                    <a href="#" class="btn">Agregar al Carrito</a>
                </div>
                <div class="product-card">
                    <img src="monitor.jpg" alt="Monitor UltraWide">
                    <h3>Monitor UltraWide</h3>
                    <p class="price">$449.99</p>
                    <p>Monitor UltraWide de alta resolución perfecto para multitareas y juegos.</p>
                    <a href="#" class="btn">Agregar al Carrito</a>
                </div>
                <!-- Agrega más productos según sea necesario -->
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Key Masters. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
