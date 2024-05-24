<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Tienda de Ordenadores y Teclados</title>
    <link rel="stylesheet" href="css">
    <style>
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

        p {
            margin-bottom: 20px;
        }

        .team-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .team-member {
            flex: 1 1 calc(33.333% - 20px);
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .team-member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .team-member h3 {
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .team-member p {
            margin: 0;
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

    <main>
        <section id="quienes_somos">
            <div class="container">
                <h2>Quiénes Somos</h2>
                <p>En Key Masters, somos líderes en la venta de ordenadores y teclados de alta calidad. Con más de una década de experiencia en el sector tecnológico, nos dedicamos a ofrecer productos de vanguardia y soluciones innovadoras para satisfacer las necesidades de nuestros clientes. Nuestra misión es proporcionar una experiencia de compra excepcional a través de un servicio al cliente incomparable y una amplia gama de productos tecnológicos de última generación.</p>
            </div>
        </section>

        <section id="objetivo">
            <div class="container">
                <h2>Nuestro Objetivo</h2>
                <p>Nuestro principal objetivo es convertirnos en la empresa líder en el mercado de tecnología, destacándonos por la calidad de nuestros productos y la excelencia en nuestro servicio al cliente. Nos comprometemos a estar a la vanguardia de las innovaciones tecnológicas y a mantener un enfoque centrado en el cliente para garantizar su satisfacción total. Nos esforzamos por establecer relaciones duraderas con nuestros clientes y socios, basadas en la confianza y el respeto mutuo.</p>
            </div>
        </section>

        <section id="equipo">
            <div class="container">
                <h2>Nuestro Equipo</h2>
                <div class="team-section">
                    <div class="team-member">
                        <img src="ceo.jpg" alt="CEO">
                        <h3>Juan Pérez</h3>
                        <p>CEO</p>
                        <p>Con una visión innovadora y un liderazgo sólido, Juan ha guiado a Key Masters hacia el éxito desde su fundación.</p>
                    </div>
                    <div class="team-member">
                        <img src="cto.jpg" alt="CTO">
                        <h3>María Gómez</h3>
                        <p>CTO</p>
                        <p>Experta en tecnología, María dirige nuestro equipo de desarrollo para garantizar que nuestros productos estén siempre a la vanguardia.</p>
                    </div>
                    <div class="team-member">
                        <img src="cfo.jpg" alt="CFO">
                        <h3>Carlos Rodríguez</h3>
                        <p>CFO</p>
                        <p>Carlos gestiona las finanzas de la empresa con una precisión y una dedicación que aseguran nuestro crecimiento sostenible.</p>
                    </div>
                    <!-- Puedes agregar más miembros del equipo aquí -->
                </div>
            </div>
        </section>

        <section id="valores">
            <div class="container">
                <h2>Nuestros Valores</h2>
                <p>En Key Masters, nuestros valores fundamentales son la integridad, la innovación, el compromiso con la calidad y la orientación al cliente. Creemos en hacer lo correcto en todo momento, en impulsar la innovación tecnológica, en ofrecer productos y servicios de la más alta calidad y en poner a nuestros clientes en el centro de todo lo que hacemos.</p>
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
