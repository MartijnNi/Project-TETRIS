<?php
include "../../database/dbconfig.php";
checkInLog();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="/project-TETRIS/Games/reactiongame/reaction.css">
    <link rel="stylesheet" href="/project-TETRIS/navbar/navfooter.css">    
    <link rel="stylesheet" href="/project-TETRIS/messages/messages.css" />
    <title>RetroGen</title>
</head>
<body>
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
              <a href="/project-TETRIS/friends/friends.php">Friends</a>
            	<!-- De knop die de popup activeert -->
              <a onclick="openMessages()">Messages</a>
              <a id="signout" href="/project-TETRIS/database/signout.php">Sign Out</a>
            </div>
          </div>
          <img class="profilePictureNav" alt="profilepicture" height="60" src="/project-tetris/profile/profileImages/<?php echo $_SESSION['profileImage']; ?>"/>
        </ul>
    </div>
</nav>
    <!-- Navbar End -->

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


    <div class="reactText">
        <h1>Reaction Game!</h1>
    </div>
    <div class="fieldFlexbox">
        <div class="field" id="field">
        <p>Click me when I turn green!<br><br></p>
        <button class="button-54" id="startGame" role="button" onclick="startGame()">Start</button>
    </div>
    </div>

    
    <!-- Javascript -->
    <script src="/project-TETRIS/Games/reactiongame/reaction.js"></script>
    <script src="/project-TETRIS/navbar/navToggle.js"></script>
    <script src="/Project-TETRIS/messages/messages.js"></script>

</body>
</html>