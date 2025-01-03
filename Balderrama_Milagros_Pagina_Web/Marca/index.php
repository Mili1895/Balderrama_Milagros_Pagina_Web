<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilomarca.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/js/scrip.js"></script>
    <title>MARCA</title>
</head>
<body>
    <header class="header">
        <a href="../index.php">
            <img src="../Imagenes/Logo 2.png" alt="Logo" width="100" height="50" class="Logo">
        </a>
        <br>
        <br>
        <div id="menu-icon">
            <i class="ri-menu-line"></i>
        </div>
        <nav class="navbar" id="navbar">
            <a href="index.php" class="pagina">MARCA</a>
            <a href="../Proyectos/index.php" class="pagina">PROYECTOS</a>
            
            <a href="../Contacto/index.php" class="pagina">CONTACTO</a>
        </nav>
    </header>
    <div class="texto">
        <span class="text first-text">Bienvenidos,</span>
        <span class="text sec-text">soy BHR</span>
    </div>
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

        const text = document.querySelector(".sec-text");
        const textLoad = () => {
            setTimeout(() => {
                text.textContent = "Diseñadora";
                setTimeout(() => {
                    text.textContent = "Ilustradora";
                    textLoad(); 
                }, 4000);
            }, 4000);  
        };
        textLoad();
    </script>
</body>
</html>