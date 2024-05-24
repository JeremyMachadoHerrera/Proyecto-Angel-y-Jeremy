pagina web:
index:
<?php
session_start();

// Definir productos
$productos = array(
    array("id" => 1, "nombre" => "Ordenador Portátil", "precio" => 899.99, "imagen" => "laptop.jpg"),
    array("id" => 2, "nombre" => "Teclado Mecánico", "precio" => 129.99, "imagen" => "teclado.jpg"),
    array("id" => 3, "nombre" => "Monitor UltraWide", "precio" => 449.99, "imagen" => "monitor.jpg"),
    // Agrega más productos según sea necesario
);

// Función para agregar un producto al carrito
function agregarAlCarrito($id) {
    $_SESSION['carrito'][] = $id;
}

// Función para obtener el número de productos en el carrito
function obtenerCantidadCarrito() {
    if (isset($_SESSION['carrito'])) {
        return count($_SESSION['carrito']);
    } else {
        return 0;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key Masters</title>
    <link rel="icon" type="image/png" href="C:\xampp\htdocs\icono.png">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('imagen.jpg');
            background-size: contain; /* Empequeñecer la imagen para que quepa en la ventana */
            background-position: center; /* Centrar la imagen */
            background-repeat: no-repeat; /* Evitar que la imagen se repita */
            background-size: contain; /* Empequeñecer la imagen para que quepa en la ventana */
            
        }

        .alt {
            color: white
        }

        .container {
            width: 80%;
            margin: 0 auto;
            color: black
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

        .hero {
            background-image: url('hero-image.jpg');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            margin-bottom: 50px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .productos {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
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

        .producto h3 {
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .producto .precio {
            font-weight: bold;
            color: #007bff;
            margin-bottom: 10px;
        }

        .producto .btn {
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

        .producto .btn:hover {
            background-color: #0056b3;
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
    </style>
</head>
<body>
    <header>
        <div class="container">
        <div class="logo">
            <!-- Agrega tu logo aquí -->
            <img src="logo.png"  class="logo-img">
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
        <section class="hero" style="background-image: url('c:\xampp\htdocs\imagen.jpg');">
            <div class="container">
                <h1>Bienvenido a nuestra tienda en línea</h1>
                <p>Encuentra una amplia selección de ordenadores y teclados de alta calidad</p>
            </div>
        </section>

        <section class="productos">
            <div class="container">
                <h2>Productos Destacados</h2>
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
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Tienda de Tecnologia e inovacion. Keymasters Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
