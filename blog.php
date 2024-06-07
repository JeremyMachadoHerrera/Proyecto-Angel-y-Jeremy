<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Keymasters</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo de Keymasters" >
            <h1>Keymasters</h1>
        </div>
        <nav>
            <a href="index.php">Inicio</a>
            <div class="dropdown">
                <a href="about.php" class="dropbtn">Sobre Nosotros</a>
                <div class="dropdown-content">
                    <a href="history.php">Nuestra Historia</a>
                    <a href="mission.php">Nuestra Misión</a>
                    <a href="team.php">Nuestro Equipo</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="services.php" class="dropbtn">Servicios</a>
                <div class="dropdown-content">
                    <a href="consulting.php">Consultoría</a>
                    <a href="development.php">Desarrollo</a>
                    <a href="support.php">Soporte</a>
                </div>
            </div>
            <a href="contact.php">Contacto</a>
            <a href="blog.php">Blog</a>
        </nav>
    </header>
    <div class="container">
        <section>
            <h2>Blog</h2>
            <div class="blog-entry">
                <h3>Título de la Entrada del Blog 1</h3>
                <p><small>Publicado el 1 de junio de 2024</small></p>
                <p>Este es un fragmento del contenido de la primera entrada del blog...</p>
                <a href="blog-entry.php?id=1">Leer más</a>
            </div>
            <div class="blog-entry">
                <h3>Título de la Entrada del Blog 2</h3>
                <p><small>Publicado el 2 de junio de 2024</small></p>
                <p>Este es un fragmento del contenido de la segunda entrada del blog...</p>
                <a href="blog-entry.php?id=2">Leer más</a>
            </div>
            <!-- Agrega más entradas de blog según sea necesario -->
        </section>
        <section>
            <h3>Deja un comentario</h3>
            <form action="add-comment.php" method="POST">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
                <label for="comment">Comentario:</label>
                <textarea id="comment" name="comment" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Keymasters. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
