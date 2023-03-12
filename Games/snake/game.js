import { update as updateSnake, draw as drawSnake, SNAKE_SPEED, getSnakeHead, snakeIntersection, setSnakeSpeed} from './snake.js'
import { update as updateFood, draw as drawFood } from './food.js'
import { outsideGrid } from './grid.js'

let lastRenderTime = 0
let gameOver = false
const gameBoard = document.getElementById('game-board')
var display = 0;
var game_Over = document.getElementById('game-over')
var start_game = document.getElementById('start-screen')

function main(currentTime) {
  if (gameOver) {
    display = 1
    endScreen()  
    return
  }

  const slow1 = document.getElementById("slow");
  slow1.addEventListener("click", setSnakeSpeed, 5);

  const normal1 = document.getElementById("normal");
  normal1.addEventListener("click", setSnakeSpeed, 7);

  const fast1 = document.getElementById("fast");
  fast1.addEventListener("click", setSnakeSpeed, 10);

  const expert1 = document.getElementById("expert");
  expert1.addEventListener("click", setSnakeSpeed, 15);


  window.requestAnimationFrame(main)
  const secondsSinceLastRender = (currentTime - lastRenderTime) / 1000
  if (secondsSinceLastRender < 1 / SNAKE_SPEED) return


  lastRenderTime = currentTime

  update()
  draw()
}

window.requestAnimationFrame(main)

function update() {
  updateSnake()
  updateFood()
  checkDeath()
}

function draw() {
  gameBoard.innerHTML = ''
  drawSnake(gameBoard)
  drawFood(gameBoard)
}

function checkDeath() {
  gameOver = outsideGrid(getSnakeHead()) || snakeIntersection()
}

function endScreen() {
  if(display == 1) {
    game_Over.style.display = 'block';
    display = 0;
  }
  else
  {
    game_Over.display = 'none';
    display = 1
}
}
