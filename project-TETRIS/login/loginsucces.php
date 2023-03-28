<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
		<link rel="stylesheet" href="/project-tetris/login/loginsucces.css" />
		<link rel="stylesheet" href="/project-tetris/navbar/navfooter.css" />
		<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/minecraftia" type="text/css" />
		<title>RetroGen</title>
	</head>
	<body>
		<!------------- Navbar -------------->

		<nav class="navbar">
			<div class="brand-titel">
				<a href="#"><h1>RetroGen</h1></a>
			</div>

			<a href="#" class="toggle-button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>

			<div class="navbar-links">
				<ul>
					<li><a href="#">Profiel</a></li>
					<li><a href="/project-tetris/gamepage/games.php">Games</a></li>
					<li><a href="#">Vrienden</a></li>
					<li><a href="#">Inloggen</a></li>
				</ul>
			</div>
		</nav>

		<!----------- Navbar End ------------>

		<section class="login-container">
			<div class="flip-container">
				<div class="flipper" id="flipper">
					<div class="front">
						<h1 class="title">Account Created!</h1>
						<h2>Your account has succesfully been created</h2>
						<p>Have Fun!</p>
						<input type="button" onclick="location.href='/project-TETRIS/login/login.php'" class="minecraft-btn" name="loginButton" value="Take me back to login!" />
						<div class="splash-screen" id="splash-screen"></div>
					</div>
				</div>
			</div>
		</section>

		<script src="/project-tetris/navbar/navToggle.js"></script>
		<script src="/project-tetris/login/cardflip.js"></script>
	</body>
</html>
