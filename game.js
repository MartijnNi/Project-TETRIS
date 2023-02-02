import { update as updateSnake, draw as drawSnake, snake_speed } from "./snake.js"; 

let LastRenderTime = 0;
const gameBoard = document.getElementById('game-board')

function main(currentTime) {
window.requestAnimationFrame(main) //request browser to refresh the frame
const secondsSinceLastRender = (currentTime - LastRenderTime) / 1000 // calculates the time of the secondsSinceLastRender
if (secondsSinceLastRender < 1 / snake_speed) return // makes sure the snake moves 2 tiles p/s based on the refreshed frames

LastRenderTime = currentTime

update()
draw()
}

window.requestAnimationFrame(main) // starts the loop

function update(){
    updateSnake();
}

function draw(){
    gameBoard.innerHTML = ''
    drawSnake(gameBoard);
}
    
