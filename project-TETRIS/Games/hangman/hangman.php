<?php
include "../../database/dbconfig.php";
checkInLog();
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
		<link rel="stylesheet" href="hangman.css" />
		<link rel="stylesheet" href="/navbar/navfooter.css" />
		<title>RetroGen</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>
	<body>
		<!------------- Navbar -------------->

		<nav class="navbar">
			<div class="brand-titel">
				<a href="/gamepage/games.php"><h1>RetroGen</h1></a>
			</div>

			<a href="#" class="toggle-button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>

			<div class="navbar-links">
				<ul>
					<li><a href="/Project-TETRIS/gamepage/games.php">Games</a></li>
					<li><a href="/project-tetris/login/login.php"><?php echo $_SESSION['username']; ?></a></li>
					<li><a href="#">*profielfoto</a></li>
				</ul>
			</div>
		</nav>
		<!------------- Navbar End -------------->

        <body> 
            <div class="container">
                <h1 class="text-center">Hangman</h1>
                <div class="float-right">Wrong Guesses: <span id='mistakes'>0</span> of <span id='maxWrong'></span></div>
                <div class="text-center">
                  <img id='hangmanPic' src="./images/0.jpg" alt="">
                  <p>Guess the game related word!</p>
                  <p id="wordSpotlight">The word to be guessed goes here</p>
                  <div id="keyboard"></div>
                  <button class="btn btn-info" onClick="reset()">Reset</button>
                </div> 
              </div>
        </body>
 
		
		<!----------- Js ------------>
		<script src="/navbar/navToggle.js"></script>
		<script src="hangman.js"></script>
		<script src=""></script>
	</body>
</html>