<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="/Project-TETRIS/Games/snake/snake.css">
    <link rel="stylesheet" href="/Project-TETRIS/navbar/navfooter.css">
    <title>RetroGen</title>
	</head>
	<body>

		<!------------- Navbar -------------->

<nav class="navbar">
    <div class="brand-titel"><a href="/Project-TETRIS/gamepage/games.php"><h1>RetroGen</h1></a>
    </div>

    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>

    <div class="navbar-links">
        <ul>
            <li><a href="/Project-TETRIS/gamepage/games.php">Games</a></li>
            <li><a href="#">Vrienden</a></li>
            <li><a href="#">Profiel</a></li>
            <li><a href="#" style="color: rgb(200, 0, 0);">Uitloggen</a></li>
        </ul>
    </div>
</nav>
<!------------- Navbar End -------------->


  
<div id="img" src="/Project-TETRIS/Games/snake/snakehoofd-removebg-preview.png"></div>

<div class="playerScore">
  <p>Bamboo Eaten:</p> 
  <div id="score" class="score"> 0 </div>
</div>

<div class="game-board-canvas" id="game-board"></div>
  <div id="game-over" class="screen"> 
    <h1>Game Over!</h1>
    <p>Points earned: </p>
    
  <div id="score2" class="score2"> 0 <br></div> 
  <button id="btn" class="restartButton" onclick="game_restart()">Restart</button>
  </div>



<!----------- Js ------------>
<script>
  function game_restart() {
    window.location.reload();
  }
</script>



<script src="/Project-TETRIS/navbar/navToggle.js"></script>
<script src="/Project-TETRIS/Games/snake/game.js" defer type="module"></script>
    
</body>
</html>



















