import { getInputDirection } from "./input.js";

export const snake_speed = 5
const snakeBody = [{ x: 11, y: 11 }]
let newSegment = 0

export function update() {
    addSegments()
    const inputDirection = getInputDirection()
    for (let i = snakeBody.length - 2; i >= 0; i--) {
      snakeBody[i + 1] = { ...snakeBody[i] }
    }
  
    snakeBody[0].x += inputDirection.x
    snakeBody[0].y += inputDirection.y
  }

export function draw(gameBoard) {   //this creates the starting position of the snake and adds it as a div to the board
    snakeBody.forEach(segment => {
      const snakeElement = document.createElement('div')
      snakeElement.style.gridRowStart = segment.x
      snakeElement.style.gridColumnStart = segment.y
      snakeElement.classList.add('snake')
      gameBoard.appendChild(snakeElement)
    })
  }

export function expandSnake(amount) { 
newSegment += amount
}

export function onSnake(position) {
  return snakeBody.some(segment => {
    return equalPositions(segment, position) //* this will turn out as true
  })
}
 
function equalPositions(pos1, pos2) {         //if snake is on the food *
  return pos1.x === pos2.x && pos1.y === pos2.y
}
  
function addSegments() {
  for (let i = 0; i < newSegment; i++) {           //pushes a new segment to the back of the snake
    snakeBody.push({ ...snakeBody[snakeBody.length - 1]})
  }

  newSegment = 0
}
