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
    <!-- Navbar End -->
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
</body>
</html>