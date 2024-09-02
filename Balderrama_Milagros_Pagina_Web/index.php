<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>BHR</title>
</head>
<body>
    <header class="header">
        <a href="">
            <img src="Imagenes/Logo 2.png" alt="Logo" width="100" height="50" class="Logo">
        </a>
        <br>
        <br>
        <div id="menu-icon">
            <i class="ri-menu-line"></i>
        </div>
        <nav class="navbar" id="navbar">
            <a href="Marca/index.php" class="pagina">MARCA</a>
            <a href="Proyectos/index.php" class="pagina">PROYECTOS</a>
            <a href="Contacto/index.php" class="pagina">CONTACTO</a>
        </nav>
    </header>
    <section class="Nombre">
        <div class="Nombre-02">
            <h1>Milagros Balderrama Rojas</h1>
            <br>
            <h2>Diseñadora gráfica</h2>
            <h4>Me llamo Milagros Balderrama y soy diseñadora e ilustradora.<br>Mi objetivo es transformar ideas en experiencias visuales impactantes, utilizando una combinación de habilidades técnicas y un ojo para el detalle. ¡Estoy emocionada de colaborar y darle vida a tus ideas!</h4>
            <br><br>
            <a href="#">Adelante</a>
            <a href="#" class="ctaa"><i class="ri-arrow-drop-right-fill"></i>Bienvenido</a>
        </div>
        <div class="imagen">
            <img src="Imagenes/Diseñadora.png" alt="Diseñadora" width="700" height="1000">
        </div>
    </section>
    <div class="icons">
        <a href="https://www.instagram.com/"><i class="ri-instagram-line"></i></a>
        <a href="https://www.behance.net/milagrobalderr"><i class="ri-behance-line"></i></a>
        <a href="https://mail.google.com/mail/u/1/?ogbl#inbox"><i class="ri-mail-line"></i></a>
    </div>
    <script>
        document.getElementById('menu-icon').addEventListener('click', function() {
            var navbar = document.getElementById('navbar');
            navbar.classList.toggle('active');
        });
    </script>
</body>
</html>