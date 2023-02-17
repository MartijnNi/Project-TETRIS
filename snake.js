import { getInputDirection, snakePos} from "./input.js"


export const SNAKE_SPEED = 5
const snakeBody = [{ x: 11, y: 11 }]
let newSegments = 0
let inputDirection = { x: 0, y: 0 }

export function update() {
                addSegments()

  const inputDirection = getInputDirection()
  for (let i = snakeBody.length - 2; i >= 0; i--) {  //makes the tail follow the snake
    snakeBody[i + 1] = { ...snakeBody[i] }
  }

  snakeBody[0].x += inputDirection.x
  snakeBody[0].y += inputDirection.y
}

export function draw(gameBoard) {
  snakeBody.forEach(segment => {
    const snakeElement = document.createElement('div')  //creates the snakehead on the board
    snakeElement.style.gridRowStart = segment.y
    snakeElement.setAttribute("id","snake")
    snakeElement.style.gridColumnStart = segment.x
    snakeElement.classList.add('snake')
    gameBoard.appendChild(snakeElement)

  const snakePos1 = snakePos()
console.log(snakePos1)
  // if(snakePos1 == up){
  //   document.getElementById("snake").style.transform = "rotate(180deg)";  
  // }

  // else if(snakePos1 == down){
  //   document.getElementById("snake").style.transform = "rotate(0deg)";
  // }

  // else if(snakePos1 == left){
  //   document.getElementById("snake").style.transform = "rotate(90deg)";
  // }

  // else if(snakePos1 == right){
  //   document.getElementById("snake").style.transform = "rotate(270deg)";
  // }
  }
  
)}

export function expandSnake(amount) {
  newSegments += amount
}

export function onSnake(position, { ignoreHead = false } = {}) {
  return snakeBody.some((segment, index) => {
    if (ignoreHead && index === 0) return false
    return equalPositions(segment, position)
  })
}

export function getSnakeHead() {
  return snakeBody[0]
}

export function snakeIntersection() {            //if the snake touches him self he dies
  return onSnake(snakeBody[0], { ignoreHead: true })
}

function equalPositions(pos1, pos2) {
  return pos1.x === pos2.x && pos1.y === pos2.y  // looks if the snake is on the same position as the food 
}

function addSegments() {
  for (let i = 0; i < newSegments; i++) {        //adds a new segment to the snake 
    snakeBody.push({ ...snakeBody[snakeBody.length - 1] })
  
  }

  newSegments = 0
}
