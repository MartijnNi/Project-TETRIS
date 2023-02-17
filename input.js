let inputDirection = { x: 0, y: 0 }
let lastInputDirection = { x: 0, y: 0 }

// export {
//   up, down, left, right
// }


window.addEventListener('keydown', e => {
  switch (e.key) {
    case 'ArrowUp':
      if (lastInputDirection.y !== 0) break
      inputDirection = { x: 0, y: -1 }
      snakePos = up
      break
    case 'ArrowDown':
      if (lastInputDirection.y !== 0) break
      inputDirection = { x: 0, y: 1 }
      snakePos = down
      break
    case 'ArrowLeft':
      if (lastInputDirection.x !== 0) break
      inputDirection = { x: -1, y: 0 }
      snakePos = left
      break
    case 'ArrowRight':
      if (lastInputDirection.x !== 0) break
      inputDirection = { x: 1, y: 0 }
      snakePos = right
      break
  }
})

// var up = inputDirection = { x: 0, y: -1}
// var down = inputDirection = { x:0, y: 1}
// var left = inputDirection = { x: -1, y:0}
// var right = inputDirection = { x:1, y:0}


export function getInputDirection() {
  
  lastInputDirection = inputDirection
  return inputDirection
  
  
}

export function snakePos(){
  return snakePos
}