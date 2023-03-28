<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
		<link rel="stylesheet" href="/project-tetris/login/login.css" />
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
				
			</div>
		</nav>

		<!----------- Navbar End ------------>

		<section class="login-container">
			<div class="flip-container">
				<div class="flipper" id="flipper">
					<div class="front">
						<h1 class="title">Inloggen</h1>
						<form method="post" name="loginCard" action="/project-TETRIS/database/login.php">
							<input type="text" name="username" placeholder="Gebruikersnaam" />
							<input type="password" name="userpassword" id="id_password" placeholder="Password" />
							<i class="far fa-eye" id="togglePassword">Show password</i>
							<input type="submit" class="minecraft-btn" name="submit" value="Login" />
						</form>
						<a class="flipbutton" id="loginButton" href="#">Create my account →</a>
						<div class="splash-screen" id="splash-screen"></div>
					</div>

					<div class="back">
						<h1 class="title">Register</h1>
						<form method="post" name="loginCard" action="/project-TETRIS/database/create.php">
							<input type="text" id="username" name="username" placeholder="Username" />
							<input type="text" id="fullname" name="fullname" placeholder="Name" />
							<input type="email" id="email" name="email" placeholder="E-Mail" />
							<input type="password" id="userpassword" name="userpassword" placeholder="Password" />
							<i class="far fa-eye" id="togglePassword2">Show password</i>
							<input type="submit" name="submit" class="minecraft-btn" value="Account maken!" />
						</form>
						<a class="flipbutton" id="registerButton" href="#">Login to my account →</a>
					</div>
				</div>
			</div>
		</section>

		<!----------- Js ------------>
		<script src="/project-tetris/navbar/navToggle.js"></script>
		<script src="/project-tetris/login/cardflip.js"></script>
		<!----------- Eind Js ------------>
	</body>
</html>
