<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Key Masters</title>
    <link rel="icon" type="image/png" href="C:\xampp\htdocs\icono.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('fondo.jpg'); /* Asegúrate de tener la imagen de fondo en la carpeta correcta */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: white;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0; /* Incrementar padding */
            margin-bottom: 40px; /* Añadir margen inferior */
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

        .logo-img {
            width: 50px; /* Ancho deseado */
            height: auto; /* Para mantener la proporción original */
            margin-top: 10px; /* Bajar un poco el logo */
            margin-left: -20px; /* Mover el logo un poco a la izquierda */
        }

        .company-name {
            margin-left: 20px; /* Espacio entre el logo y el nombre de la empresa */
            color: white; /* Color de texto deseado */
            margin-top: 10px; /* Subir un poco el título de la empresa */
            font-weight: bold;
        }

        .login-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            margin: auto; /* Centrar el contenedor de login */
            margin-top: 60px; /* Incrementar margen superior */
            margin-bottom: 60px; /* Incrementar margen inferior */
        }

        .login-container img {
            max-width: 100px; /* Ajusta el tamaño del logo si es necesario */
        }

        .login-container h2 {
            margin: 20px 0;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0; /* Incrementar padding */
            text-align: center;
            margin-top: 40px; /* Añadir margen superior */
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
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

    <div class="login-container">
        <img src="logo.png" alt="Logo de la tienda">
        <h2>Inicia Sesión</h2>
        <form action="procesar_login.php" method="POST">
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 KeyMasters. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
