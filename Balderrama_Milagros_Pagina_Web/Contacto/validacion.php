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
<?php
$servername = "localhost";
$username = "root";  // Cambia si usas un usuario diferente en MySQL
$password = "";      // Si tienes una contraseña en MySQL, agrégala aquí
$dbname = "comentariosDB";  // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$comentario = $_POST['Comentario'];

// Preparar e insertar los datos en la tabla
$sql = "INSERT INTO comentarios (nombre, email, comentario) VALUES ('$nombre', '$email', '$comentario')";

if ($conn->query($sql) === TRUE) {
    echo "Comentario enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
</html>