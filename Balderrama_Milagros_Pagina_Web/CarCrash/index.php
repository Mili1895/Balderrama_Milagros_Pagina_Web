<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Juego</title>
    <script src="sketch.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocarcrash.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/js/scrip.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
    <title>CAR CRASH</title>
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
            <a href="index.php" class="pagina"></a>
           
            
        </nav>
    </header>
    <div class="game-container">
    
        
        <!-- El canvas se generará aquí automáticamente por P5.js -->
    </div>
    <script>
        
        
                window.addEventListener("keydown", function(event) {
        if (["ArrowUp", "ArrowDown", "ArrowLeft", "ArrowRight"].includes(event.key)) {
            event.preventDefault(); // Evita el desplazamiento de la página
        }
        });

    </script>
    
</body>
</html>
