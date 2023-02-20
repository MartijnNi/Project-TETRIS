import { onSnake, expandSnake } from './snake.js'
import { randomGridPosition } from './grid.js'

let score = 0
let scoreElement = document.querySelector('.score');
let scoreElement2 = document.querySelector('.score2');
let food = getRandomFoodPosition()
const EXPANSION_RATE = 1

export function update() {
  if (onSnake(food)) {             //looks if the food is on the snake 
    expandSnake(EXPANSION_RATE)
    food = getRandomFoodPosition()
    score+=1
    console.log(score)
    scoreElement.innerHTML = score;
    scoreElement2.innerHTML = score;
  }
  // scoreElement.innerHTML += score;
  // scoreElement2.innerHTML += score;
  // document.getElementsByClassName('score').innerHTML += score;
  // document.getElementsByClassName('score2').innerHTML += score;
  
}

export function draw(gameBoard) {
  const foodElement = document.createElement('div')  //adds the food to the board
  foodElement.style.gridRowStart = food.y
  foodElement.style.gridColumnStart = food.x
  foodElement.classList.add('food')
  gameBoard.appendChild(foodElement)
}

function getRandomFoodPosition() {   //looks if there is food on the board, and if there isnt makes sure food doenst spawn on the snake
  let newFoodPosition
  while (newFoodPosition == null || onSnake(newFoodPosition)) {
    newFoodPosition = randomGridPosition()
  }
  return newFoodPosition
}