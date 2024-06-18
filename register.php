<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Keymasters</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        
        header .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            transition: background-color 0.3s ease;
        }
        nav ul li a:hover {
            background-color: #555;
        }
        #register {
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        #register h2 {
            margin-bottom: 20px;
        }
        #register input[type="text"],
        #register input[type="email"],
        #register input[type="password"],
        #register select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: border-color 0.3s ease;
        }
        #register input[type="text"]:focus,
        #register input[type="email"]:focus,
        #register input[type="password"]:focus,
        #register select:focus {
            outline: none;
            border-color: #555;
        }
        #register button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }
        #register button:hover {
            background-color: #555;
        }
        
    </style>
</head>
<body>
    <header>
        <div class="logo">Keymasters</div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="register.php">Registro</a></li>
                <li><a href="login.php">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <section id="register">
        <h2>Registro</h2>
        <form action="register_Action.php" method="post">
            <input type="text" name="username" placeholder="Nombre de Usuario" required>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <select name="role">
                <option value="cliente">Cliente</option>
                <option value="encargado">Encargado</option>
                <option value="admin">Administrador</option>
            </select>
            <button type="submit">Registrar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Consultoría Informática. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
