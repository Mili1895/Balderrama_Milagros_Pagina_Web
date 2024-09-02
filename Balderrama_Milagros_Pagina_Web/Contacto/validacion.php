<?php
$name = $_POST["name"];
$email = $_POST["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Resultado del Formulario</title>
</head>
<body>
  <h1>Resultado del Formulario</h1>
  <p>Usuario: <?php echo htmlspecialchars($name); ?></p>
  <p>Contraseña: <?php echo htmlspecialchars($email); ?></p>
  <a href="../index.php">Volver al inicio</a>
</body>
</html>