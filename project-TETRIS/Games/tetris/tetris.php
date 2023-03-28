<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
		<link rel="stylesheet" href="/project-TETRIS/games/tetris/tetris.css" />
		<link rel="stylesheet" href="/project-TETRIS/navbar/navfooter.css" />
		<title>RetroGen</title>
	</head>
	<body>
		<!------------- Navbar -------------->

		<nav class="navbar">
			<div class="brand-titel">
				<a href="/project-TETRIS/gamepage/games.php"><h1>RetroGen</h1></a>
			</div>

			<a href="#" class="toggle-button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>

			<div class="navbar-links">
				<ul>
					<li><a href="/project-TETRIS/gamepage/games.php">Games</a></li>
					<li><a href="#">Vrienden</a></li>
					<li><a href="#">Profiel</a></li>
					<li><a href="#" style="color: rgb(200, 0, 0)">Uitloggen</a></li>
				</ul>
			</div>
		</nav>
		<!------------- Navbar End -------------->

		<div class="containerTetris">
			<div class="leftFlexbox">
			<p>Hold</p>
			<canvas class="holdDisplay" id="holdDisplay" width="196" height="118"></canvas>
			</div>
			<div class="middleFlexbox">
				
				<canvas class="tetrisCanvas" id="tetris" width="391" height="780">
					<div class="content"></div>
				</canvas>

				<div id="game-over" class="screen">
					<p>Game Over!<br /><br />Score:</p>
					<div id="score2">0</div>
					<h1 id="resetTetris" onclick="refreshPage()">Retry</h1>
				</div>
			</div>



			<div class="rightFlexbox">
				<div class="rightFlexboxContainer">
					<div class="upRowFlexbox">
						<p>Next Block:</p>
						<canvas class="blockDisplay" id="nextBlockDisplay" width="196" height="118"></canvas>
					</div>
					<div class="middleRowFlexbox">

						<div class="content">
							<p>Lines cleared:</p>
							<p><br></p>
							<div class="score" id="score">0</div>
						</div>
			

					</div>
					<div class="downRowFlexbox">
						<button id="startTetris" onclick="triggerKeys()">Start</button>
					</div>
				</div>
			</div>
			</div>

		<!----------- Js ------------>
		<script src="/project-TETRIS/navbar/navToggle.js"></script>
		<script src="/project-TETRIS/games/tetris/tetrominoes.js"></script>
		<script src="/project-TETRIS/games/tetris/tetris.js"></script>
		<audio id="tetrisAudio"><source src="/project-TETRIS/tetris/tetrisAudio/03. A-Type Music (Korobeiniki).mp3" type="audio/mpeg" /></audio>
	</body>
</html>