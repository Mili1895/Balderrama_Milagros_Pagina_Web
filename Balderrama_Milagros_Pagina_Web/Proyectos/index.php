<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloproyectos.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/js/scrip.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
    <title>PROYECTOS</title>
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
            <a href="../Marca/index.php" class="pagina">MARCA</a>
            <a href="index.php" class="pagina">PROYECTOS</a>
            <a href="../Contacto/index.php" class="pagina">CONTACTO</a>
        </nav>
    </header>
    <div class="wrapper">
        <div class="contenedor">
            <input type="radio" name="slide" id="c1" checked>
            <label for="c1" class="card border border-primary">
                <div class="row">
                    <div class="icon">1</div>
                    <div class="description">
                        <h4>Ilustraciones</h4>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c2">
            <label for="c2" class="card border border-success">
                <div class="row">
                    <div class="icon">2</div>
                    <div class="description">
                        <h4>3D</h4>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c3">
            <label for="c3" class="card border border-warning">
                <div class="row">
                    <div class="icon">3</div>
                    <div class="description">
                        <h4>Posters</h4>
                    </div>
                </div>    
            </label>
            <input type="radio" name="slide" id="c4">
            <label for="c4" class="card border border-danger">
                <div class="row">
                    <div class="icon">4</div>
                    <div class="description">
                        <h4>Diseños personalizados</h4>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c5">
            <label for="c5" class="card border border-primary">
                <div class="row">
                    <div class="icon">5</div>
                    <div class="description">
                        <h4>Frog Game</h4>
                        <a href="https://agmbr2gmailcom.itch.io/froggame" target="_blank">¡A JUGAR!
                            
                        </a>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c6">
            <label for="c6" class="card border border-primary">
                <div class="row">
                    <div class="icon">6</div>
                    <div class="description">
                        <h4>Car Crash</h4>
                        <a href="" target="_blank"> ¡A LANZAR!</a>
                    </div>
                </div>
            </label>
        </div>
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
    </script>
     
</body>
</html>