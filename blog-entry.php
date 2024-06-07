<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada del Blog - Keymasters</title>
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
                    <a href="testimoniosdeclientes.php">Testimonios de Clientes</a> <!-- Enlace agregado -->
                    <a href="consulting.php">Consultoría</a>
                    <a href="development.php">Desarrollo</a>
                    <a href="support.php">Soporte</a>
                </div>
            </div>
            <a href="contact.php">Contacto</a>
            <a href="blog.php">Blog</a>
            <a href="login.php" class="login-link">Login</a> <!-- Enlace directo a la página de inicio de sesión -->
        </nav>
    </header>
    <div class="container">
        <?php
            // Aquí conectarías con la base de datos para obtener la entrada del blog
            $id = $_GET['id']; // Obtener el ID de la entrada del blog desde la URL
            // Ejemplo de datos de la entrada del blog (esto debería venir de la base de datos)
            $blog_entry = [
                'title' => 'Título de la Entrada del Blog ' . $id,
                'date' => '1 de junio de 2024',
                'content' => 'Este es el contenido completo de la entrada del blog ' . $id . '...'
            ];
        ?>
        <section>
            <h2><?php echo $blog_entry['title']; ?></h2>
            <p><small>Publicado el <?php echo $blog_entry['date']; ?></small></p>
            <p><?php echo $blog_entry['content']; ?></p>
        </section>
        <section>
            <h3>Comentarios</h3>
            <div class="comment">
                <p><strong>Nombre del Usuario:</strong> Este es un comentario.</p>
            </div>
            <!-- Agrega más comentarios según sea necesario -->
        </section>
        <section>
            <h3>Deja un comentario</h3>
            <form action="add-comment.php" method="POST">
                <input type="hidden" name="blog_id" value="<?php echo $id; ?>">
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
