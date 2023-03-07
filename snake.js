import { getInputDirection, snakePos} from "./input.js"
const snake = document.getElementById("snake");

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
  snakeBody.forEach((segment, index) => {
    const snakeElement = document.createElement('div');
    snakeElement.style.gridRowStart = segment.y;
    snakeElement.style.gridColumnStart = segment.x;
    snakeElement.classList.add('snake');
    snakeElement.setAttribute('id', `snake-${index}`);
    gameBoard.appendChild(snakeElement);
    rotate(segment, index);  // <-- Pass the segment and index to the rotate function
  });
}
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

function equalPositions(pos1, pos2, score) {
  return pos1.x === pos2.x && pos1.y === pos2.y
   // looks if the snake is on the same position as the food 
}

function addSegments() {
  for (let i = 0; i < newSegments; i++) {        //adds a new segment to the snake 
    snakeBody.push({ ...snakeBody[snakeBody.length - 1] })
  }
  newSegments = 0
}

function rotate(segment, index) {
  const snakePos = getInputDirection();
  const snakeElement = document.getElementById(`snake-${index}`);
  if (snakePos.x === 0 && snakePos.y === -1) {
    snakeElement.style.transform = 'rotate(180deg)';
  } else if (snakePos.x === 0 && snakePos.y === 1) {
    snakeElement.style.transform = 'rotate(0deg)';
  } else if (snakePos.x === -1 && snakePos.y === 0) {
    snakeElement.style.transform = 'rotate(90deg)';
  } else if (snakePos.x === 1 && snakePos.y === 0) {
    snakeElement.style.transform = 'rotate(270deg)';
  }

  if (nextSegment) {
    if (nextSegment.x > segment.x) {
      snakeElement.style.transform = 'rotate(270deg)';
    } else if (nextSegment.x < segment.x) {
      snakeElement.style.transform = 'rotate(90deg)';
    } else if (nextSegment.y > segment.y) {
      snakeElement.style.transform = 'rotate(180deg)';
    } else if (nextSegment.y < segment.y) {
      snakeElement.style.transform = 'rotate(0deg)';
    }
  
}