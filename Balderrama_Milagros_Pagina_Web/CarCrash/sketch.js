// Variables para la posición del auto
let carX, carY;
let carWidth = 50, carHeight = 30; // Tamaño del auto

// Variables para la posición del obstáculo
let obstacleX, obstacleY;
let obstacleWidth = 50, obstacleHeight = 50; // Tamaño del obstáculo

let gameOver = false; // Estado del juego
let bgColor; // Color de fondo
let score = 0; // Puntaje
let obstacleSpeed = 5; // Velocidad del obstáculo

function setup() {
  let canvas = createCanvas(400, 600);// Tamaño de la ventana del juego
  carX = width / 2 - carWidth / 2;
  carY = height - 100; // Posición inicial del auto
  obstacleX = int(random(0, width - obstacleWidth)); // Obstáculo en posición aleatoria
  obstacleY = 0;
  bgColor = color(300); // Color de fondo inicial
}

function draw() {
  background(bgColor); // Color de fondo

  if (!gameOver) {
    // Dibujar auto
    fill(0, 0, 255);
    rect(carX, carY, carWidth, carHeight);

    // Dibujar obstáculo
    fill(255, 0, 0);
    rect(obstacleX, obstacleY, obstacleWidth, obstacleHeight);

    // Movimiento del obstáculo
    obstacleY += obstacleSpeed;

    // Cuando el obstáculo sale de la pantalla, reaparece en la parte superior
    if (obstacleY > height) {
      obstacleY = 0;
      obstacleX = int(random(0, width - obstacleWidth));
      score += 20; // Incrementar el puntaje al pasar un obstáculo

      // Aumentar la velocidad cada 200 puntos
      if (score % 200 === 0) {
        obstacleSpeed += 1;
      }
    }

    // Detectar colisión
    if (
      carX < obstacleX + obstacleWidth &&
      carX + carWidth > obstacleX &&
      carY < obstacleY + obstacleHeight &&
      carY + carHeight > obstacleY
    ) {
      gameOver = true; // Termina el juego en caso de colisión
      bgColor = color(255, 0, 0); // Cambiar el color de fondo a rojo
    }

    // Controlar el auto
    if (keyIsPressed) {
      if (keyCode === LEFT_ARROW && carX > 0) {
        carX -= 5; // Movimiento hacia la izquierda
      }
      if (keyCode === RIGHT_ARROW && carX < width - carWidth) {
        carX += 5; // Movimiento hacia la derecha
      }
      if (keyCode === UP_ARROW && carY > 0) {
        carY -= 5; // Movimiento hacia arriba
      }
      if (keyCode === DOWN_ARROW && carY < height - carHeight) {
        carY += 5; // Movimiento hacia abajo
      }
    }

    // Mostrar el puntaje
    fill(100);
    textSize(20);
    textAlign(CENTER);
    text("Score: " + score, width / 2, 30);
  } else {
    // Pantalla de Game Over
    fill(100);
    textAlign(CENTER, CENTER);
    textSize(50);
    text("GAME OVER", width / 2, height / 2);

    // Mostrar el puntaje final
    textSize(20);
    fill(100);
    text("Final Score: " + score, width / 2, height / 2 + 50);

    // Mostrar puntaje centrado en la pantalla incluso en Game Over
    text("Score: " + score, width / 2, 30);

    // Reiniciar el juego al presionar una tecla
    if (keyIsPressed) {
      resetGame();
    }
  }
}

function resetGame() {
  carX = width / 2 - carWidth / 2;
  obstacleY = 0;
  obstacleX = int(random(0, width - obstacleWidth));
  gameOver = false;
  bgColor = color(300); // Restaurar el color de fondo inicial
  score = 0; // Reiniciar el puntaje
  obstacleSpeed = 5; // Reiniciar la velocidad
}

// Deshabilitar el comportamiento predeterminado de las flechas del teclado
