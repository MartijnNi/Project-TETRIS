export const snake_speed = 2;

export function update(){
    console.log('update snake')
}

export function draw(gameBoard){
    snakeBody.forEach(segment =>{  //draw's every piece of the snake body
    const snakeElement = document.createElement('div') //makes the snake element a div
    snakeElement.style.gridRowStart = segment.x //makes the starting x posistion for the head
    snakeElement.style.gridColumnStart = segment.y //makes the starting y position for the head
    snakeElement.classList.add('snake') 
    gameBoard.appendChild(snakeElement) // add's the snake div to the board
    })
}

