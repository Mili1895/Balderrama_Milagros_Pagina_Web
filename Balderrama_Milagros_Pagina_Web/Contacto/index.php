<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" 
    referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="../css/estilocontacto.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <title>CONTACTO</title>
</head>
<body>
    <header class="header">
        <a href="../index.php">
            <img src="../Imagenes/Logo 2.png" alt="" width="100px" height="50px" class="Logo">
        </a>
        <br>
        <br>
        <div id="menu-icon">
            <i class="ri-menu-line"></i>
        </div>
        <nav class="navbar" id="navbar">
            <a href="../Marca/index.php" class="pagina">MARCA</a>
            <a href="../Proyectos/index.php" class="pagina">PROYECTOS</a>
            <a href="index.php" class="pagina">CONTACTO</a>
        </nav>
    </header>
    <section>
        <form id="loginaction" action="validacion.php" method="post" onsubmit="return validarFormulario">
            <h2>¡Comenta!</h2>
            <div class="input-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Nombre" required>
                <label for="Email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="Comentario"></label>
                <textarea name="Comentario" id="Comentario" cols="30" rows="5" placeholder="Deja tu opinion" required></textarea>
                <div class="form-txt">
                    <a href="#">Política de privacidad</a>
                    <a href="#">Términos y condiciones</a>
                </div>
                <input class="btn" type="submit" value="Enviar">
            </div>
        </form>
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
    <script>
    function validarFormulario() {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;

      if (name.trim() === "") {
        alert("Por favor ingresa tu name.");
        document.getElementById("name").style.borderColor = "red";
        return false;
      }

      if (email.trim() === "") {
        alert("Por favor ingresa tu email.");
        document.getElementById("email").style.borderColor = "red";
        return false;
      }

      return true; 
    }
  </script>
</body>
</html>