let green = false;
let startTime;

function startGame() {
    document.getElementById("startGame").style.visibility = "hidden";
    document.getElementById("field").style.background = "red";
}

const startButton = document.querySelector("#startGame");

startButton.addEventListener("click", () => {
    const delay = Math.floor(Math.random() * 6) + 2;
    setTimeout(() => {
        console.log(`Timer done after ${delay} seconds!`);
        document.getElementById("field").style.background = "#00ff00";
        document.getElementById("field").innerHTML = "NOW!!!";
        document.getElementById("field").style.fontSize = "500%";
        green = true;
        startTime = Date.now();
    }, delay * 1000);
});

function field() {
    if (green) {
        const elapsedTime = Date.now() - startTime;
        const restartButton = document.createElement("button");
        restartButton.innerHTML = "Restart";
        restartButton.classList.add("restart-button");
        document.getElementById("field").style.fontSize = "100%";
        document.getElementById("field").innerHTML = `Je klikte in ${elapsedTime} millisecondes!<br><br>`;
        document.getElementById("field").appendChild(restartButton);
        restartButton.addEventListener("click", restart);
    }
}



function restart() {
    location.reload();
}


document.getElementById("field").addEventListener("click", field);

