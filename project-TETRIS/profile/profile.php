<?php
include "../database/dbconfig.php";
checkInLog();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
		<link rel="stylesheet" href="/project-tetris/profile/profile.css" />
		<link rel="stylesheet" href="/project-tetris/navbar/navfooter.css" />
        <link rel="stylesheet" href="/Project-TETRIS/messages/messages.css">
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
          <div class="dropdown">
            <li><a class="dropbtn"><?php echo $_SESSION['username']; ?></a></li>
            <div class="dropdown-content">
              <img class="profilePictureMenu" alt="profilepicture" height="60" src="/project-tetris/profile/profileImages/<?php echo $_SESSION['profileImage']; ?>"/>
              <a href="/project-TETRIS/profile/profile.php">Profile</a>
              <a href="#">Friends</a>
            	<!-- De knop die de popup activeert -->
              <a onclick="openMessages()">Messages</a>
              <a id="signout" href="/project-TETRIS/database/signout.php">Sign Out</a>
            </div>
          </div>
          <img class="profilePictureNav" alt="profilepicture" height="60" src="/project-tetris/profile/profileImages/<?php echo $_SESSION['profileImage']; ?>"/>
        </ul>
    </div>
</nav>
		<!----------- Navbar End ------------>

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

		<section class="login-container">
			<div class="flip-container">
				<div class="flipper" id="flipper">
					<div class="front">
                        <div class="profileContainer">
                            <div class="profileContainerLeft">
                                <h1 class="profileName">Welcome, <?php echo $_SESSION['username']; ?>!</h1>
                                <div class="profilePictureContainer">
                                    <div class="profilePictureContainerLeft">
                                        <div class="container">
                                        <form action="../database/upload.php" method="post" enctype="multipart/form-data">
                                           <div class="profilePicture" style="background-image: url(/project-tetris/profile/profileImages/<?php echo $_SESSION['profileImage']; ?>);"></div>
                                                <input type="file" name="file" id="myFileInput" onchange="previewImage()" />
                                                <div class="middle">
                                                <div class="text" onclick="document.getElementById('myFileInput').click()">Change Picture</div>
                                                <input type="submit" name="postPfp" class="submitPfp" value="Upload">
                                            </div>
                                        </form>
                                </div>
                            </div>
                            <div class="profilePictureContainerRight">
                                <div class="status">
                                <h1 id="statusTitle">Status</h1>
                                <form method="post" action="/project-TETRIS/database/update.php">
                                    <textarea type="textArea" placeholder="What's going on?!" id="userStatus" name="userStatus" rows="5" cols="100"><?php echo $_SESSION['userStatus']; ?></textarea>
                                    <input type="submit" class="submitStatus" name="" id="submitStatus" value="Save"></input>
                                </form>
                                </div>
                            <div class="favoriteGame">
                                <h1>Favorite Game<h1>
                            <div class="dropdown">
                        <div class="select">
                        <select>
                            <option>Nothing Yet..</option>
                            <option>Tetris</option>
                            <option>Snake</option>
                            <option>Reaction</option>
                            <option>Pac-Man</option>
                            <option>Hangman</option>
                            <option>Whack a Mole</option>
                            <option>Memory</option>
                        </select>
                    </div>
        </div>
                            </select>  
                            </div>
                            </div>
                         </div>



                            <div class="profileEditContainer">
                                <h1>Account Information:</h1>
                                <form method="post" action="/project-TETRIS/database/update.php">
                                <div class="inputFields">
                                <label for="username">Username</label><br>
                                <input type="text" id="username" name="username" placeholder="<?php echo $_SESSION['username']; ?>" />
                                <button type="submit" name="submit">Change</button><br>
                                <label for="username">First Name</label><br>
                                <input type="text" id="fullname" name="firstname" placeholder="<?php echo $_SESSION['firstname']; ?>" />
                                <button type="submit" name="submit">Change</button><br>
                                <label for="username">E-Mail</label><br>
                                <input type="email" id="email" name="email" placeholder="<?php echo $_SESSION['email']; ?>" />
                                <button type="submit" name="submit">Change</button><br>
                                <label for="username">Password</label><br>
                                <input type="password" id="userpassword" name="userpassword" placeholder="*********" />
                                <button type="submit" name="submit">Change</button><br>
                                </div>
                            </form>
                        </div>


                        </div>
                        <div class="profileContainerRight">
                        <div id="highScoresGamesContainerShow">
                                <p>Test</p>
                                <div id="infoTetris">
                                    <p>Highscores:<p>
                                </div>
                            </div>
                            <div id="highScoresContainerShow"  class="highScoresContainer">
                                <p>Total Playtime:<p>
                                <p>Total Playcount:<p>
                                <p>Highscores:<p>
                            </div>
                            <div class="gamesContainer">
                                <p>Game Information</p>
                                <div class="gameButtons">
                                    <button id="pacmanButton" onclick="toggleInfo('pacmanButton', 'pacmanTarget')">Pac-Man</button>
                                    <button id="snakeButton" onclick="toggleInfo('snakeButton', 'snakeTarget')">Snake</button>
                                    <button id="tetrisButton" onclick="toggleInfo('tetrisButton', 'tetrisTarget')">Tetris</button>
                                    <button id="hangmanButton" onclick="toggleInfo('hangmanButton', 'HangmanTarget')">Hangman</button>
                                    <button id="reactionGameButton" onclick="toggleInfo('reactionGameButton', 'reactionGameTarget')">Reaction Game</button>
                                    <button id="shooterButton" onclick="toggleInfo('shooterButton', 'shooterTarget')">Shooter</button>
                                    <button>???</button>
                                    <button>???</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
					</div>
				</div>
			</div>
</section>
		<!----------- Js ------------>
        <script>
            const urlParams = new URLSearchParams(window.location.search);
            const statusChanged = urlParams.get('statusChanged');

            if (statusChanged === 'true') {
                document.getElementById('statusTitle').innerHTML = 'Status Changed!';
            }
        </script>
		<script src="/project-tetris/navbar/navToggle.js"></script>
        <script src="/project-TETRIS/profile/profile.js"></script>
        <script src="/Project-TETRIS/messages/messages.js"></script>
		<!----------- Eind Js ------------>
	</body>
</html>