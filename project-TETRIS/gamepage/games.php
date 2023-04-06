<?php
include "../database/dbconfig.php";
checkInLog();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="/Project-TETRIS/gamepage/gamepage.css">
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
          <div class="dropdown">
          <li><a class="dropbtn"><?php echo $_SESSION['username']; ?></a></li>
          <div class="dropdown-content">
            <a href="/project-TETRIS/profile/profile.php">Profile</a>
            <a href="#">Friends</a>
            <a href="#">Messages</a>
            <a id="signout" href="/project-TETRIS/database/signout.php">Sign Out</a>
          </div>
        </div>
          <img alt="profilepicture" height="60" src="/project-TETRIS/profile/ezgif.com-resize.jpg"/>
        </ul>
    </div>
</nav>
<!------------- Navbar End -------------->



<!------------- Content -------------->
  
<div class="titel-container">
  <h1>Kies een spel!</h1>
  <h2>Oeps!<br><br>Het lijkt er op dat je niet op een Computer speelt?</h2>
</div>

<div class="sugessties">
  <h3>Je kan nog wel met je vrienden chatten en hun profiel bekijken!</h3>
</div>

<div class="carousel_wrapper">
    <div class="carousel">
      <div class="slide one">
        <a href="/Project-TETRIS/Games/tetris/tetris.php"><img src="/Project-TETRIS/media/gamepage/Tetris-Logo-1200x1200.jpg" /></a>
      </div>
      <div class="slide two">
        <a href="/Project-TETRIS/Games/reactiongame/reaction.php"><img src="/Project-TETRIS/media/gamepage/reactinogame_thumbnail.png" /></a>
      </div>
      <div class="slide three">
        <a href="/Project-TETRIS/Games/pac-man/pacman.php"><img src="/Project-TETRIS/media/gamepage/pac-man-peach-retro-games-hd-wallpaper-thumb.jpg" /></a>
      </div>
      <div class="slide four">
        <a href="/Project-TETRIS/Games/hangman/hangman.php"><img src="/Project-TETRIS/media/gamepage/png-clipart-words-game-the-hanged-man-hangman-hang-the-pirate-free-word-game-android-game-sports-equipment-thumbnail.png" /></a>
      </div>
      <div class="slide five">
        <img src="/Project-TETRIS/media/gamepage/Content not available.png" />
    </div>
    <div class="slide six">
      <img src="/Project-TETRIS/media/gamepage/Content not available.png" />
    </div>
    <div class="slide seven">
      <img src="/Project-TETRIS/media/gamepage/Content not available.png" />
    </div>
    <div class="slide eight">
      <img src="/Project-TETRIS/media/gamepage/Content not available.png" />
    </div>
    <div class="slide nine">
      <a href="/Project-TETRIS/Games/snake/snake.php"><img src="/Project-TETRIS/media/gamepage/snakethumbnail.jpg" /></a>
    </div>
  </div>
</div>
  
<!------------- Content End -------------->



<!----------- Js ------------>
<script src="/Project-TETRIS/navbar/navToggle.js"></script>
<!----------- Eind Js ------------>
</body>
</html>