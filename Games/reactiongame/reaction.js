let green = false;
let startTime;
let clicked = false;

function startGame() {
    document.getElementById("startGame").style.visibility = "hidden";
    document.getElementById("field").style.background = "red";
}

const startButton = document.querySelector("#startGame");

startButton.addEventListener("click", () => {
    const delay = Math.floor(Math.random() * 6) + 2;
    setTimeout(() => {
        document.getElementById("field").style.background = "#00ff00";
        document.getElementById("field").innerHTML = "NOW!!";
        document.getElementById("field").style.fontSize = "500%";
        green = true;
        startTime = Date.now();
    }, delay * 1000);
});

function field() {
    if (green && !clicked) {
        clicked = true;
        const elapsedTime = Date.now() - startTime;
        const restartButton = document.createElement("button");
        restartButton.innerHTML = "Restart";
        restartButton.classList.add("restart-button");
        document.getElementById("field").style.fontSize = "100%";
        document.getElementById("field").innerHTML = `You clicked in ${elapsedTime} milliseconds!<br><br>`;
        document.getElementById("field").appendChild(restartButton);
        restartButton.addEventListener("click", restart);

        // Make the field unclickable
        const fieldElement = document.getElementById("field");
        const clickHandler = () => {
            fieldElement.removeEventListener("click", clickHandler);
        };
        fieldElement.addEventListener("click", clickHandler);
    }
}





function restart() {
    location.reload();
}


document.getElementById("field").addEventListener("click", field);

