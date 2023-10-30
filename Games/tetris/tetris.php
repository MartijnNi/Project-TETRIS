<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
	<link rel="stylesheet" href="./tetris.css" />
	<link rel="stylesheet" href="../../navbar/navfooter.css" />
	<link rel="stylesheet" href="../../messages/messages.css" />
	<title>RetroGen</title>
</head>

<body>
	<!------------- Navbar -------------->
	<nav class="navbar">
		<div class="brand-titel"><a href="../../gamepage/games.php">
				<h1>RetroGen</h1>
			</a>
		</div>

		<a href="#" class="toggle-button">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</a>

		<div class="navbar-links">
			<ul>
				<li><a href="../../gamepage/games.php">Games</a></li>
				<div class="dropdown">
					<li><a class="dropbtn">Player</a></li>
					<div class="dropdown-content">
						<img class="profilePictureMenu" alt="profilepicture" height="60" src="/project-tetris/profile/profileImages/<?php echo $_SESSION['profileImage']; ?>" />
						<a href="../../profile/profile.php">Profile</a>
						<a href="../../friends/friends.php">Friends</a>
						<!-- De knop die de popup activeert -->
						<a onclick="openMessages()">Messages</a>
						<a id="signout" href="../../database/signout.php">Sign Out</a>
					</div>
				</div>
				<img class="profilePictureNav" alt="profilepicture" height="60" src="./profile/profileImages/<?php echo $_SESSION['profileImage']; ?>" />
			</ul>
		</div>
	</nav>
	<!------------- Navbar End -------------->

	<!------------- messages -------------->

	<!-- De popup zelf -->
	<div id="Message" class="popupMessagesScreen">
		<div class="Messages-content">
			<span class="close" onclick="closeMessages()">&times;</span>
			<div class="messages-titel">
				<h4>Messages</h4>
			</div>
			<div class="friends-chat-container">
				<div class="left-friendlist">
					friendlijst
				</div>
				<div class="right-chatterbox">
					<div class="textfield">
						Tekstfield
					</div>
					<div class="inputfield">
						<input type="text" id="typebox" name="typebox" value="" placeholder="type to chat..."><br>
						<input type="submit" id="submitChat" value="Submit">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!------------- messages end -------------->


	<div class="containerTetris">
		<div class="leftFlexbox">
			<p>Hold</p>
			<canvas class="holdDisplay" id="holdDisplay" width="196" height="118"></canvas>
		</div>
		<div class="middleFlexbox" id="tetrisHide">

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
	<script src="../../navbar/navToggle.js"></script>
	<script src="./tetris/tetrominoes.js"></script>
	<script src="./tetris.js"></script>
	<script src="../../messages/messages.js"></script>
	<audio id="tetrisAudio">
		<source src="./tetris/tetrisAudio/03. A-Type Music (Korobeiniki).mp3" type="audio/mpeg" />
	</audio>
</body>

</html>