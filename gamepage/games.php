<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="./gamepage.css">
  <link rel="stylesheet" href="../navbar/navfooter.css">
  <link rel="stylesheet" href="../messages/messages.css">
  <link rel="stylesheet" href="../messages/chatbot/style.css">
  <title>RetroGen</title>
</head>

<body>

  <!------------- Navbar -------------->

  <nav class="navbar">
    <div class="brand-titel"><a href="../gamepage/games.php">
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
        <li><a href="./games.php">Games</a></li>
        <div class="dropdown">
          <li><a class="dropbtn">Player</a></li>
          <div class="dropdown-content">
            <a href="./profile/profile.php">Profile</a>
            <a href="./friends/friends.php">Friends</a>
            <!-- De knop die de popup activeert -->
            <a onclick="openMessages()">Messages</a>
            <a id="signout" href="./database/signout.php">Sign Out</a>
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
          <div id="bot-friend" onclick="MarioChat()">
            <div class="bot-avatar"></div>
            <div class="marioTitel">
              <h1>🤖 Mario 🤖 </h1>
            </div>
          </div>
          <div id="bot2-friend">
            test
          </div>
        </div>
        <div class="right-chatterbox">
          <div id="textField" class="textfield">
            <div id="chat-box" class="chat-box">
              <div class="chat-log">
                <div class="chat-message bot-message">
                  <div id="splash-sentence"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="inputfield">
            <input type="text" id="user-input" name="typebox" value="" placeholder="Type your message here..."><br>
            <input type="submit" id="send-btn" value="Send">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!------------- messages end -------------->



  <!------------- Content -------------->

  <div class="titel-container" id="titelContainer">
    <h1>Kies een spel!</h1>
    <h2>Oeps!<br><br>Het lijkt er op dat je niet op een Computer speelt?</h2>
  </div>

  <div class="sugessties">
    <h3>Je kan nog wel met je vrienden chatten en hun profiel bekijken!</h3>
  </div>

  <div class="carousel_wrapper">
    <div class="carousel" id="carousel">
      <div class="slide one">
        <a href="../Games/tetris/tetris.php"><img src="../media/gamepage/Tetris-Logo-1200x1200.jpg" /></a>
      </div>
      <div class="slide two">
        <a href="../Games/reactiongame/reaction.php"><img src="../media/gamepage/reactinogame_thumbnail.png" /></a>
      </div>
      <div class="slide three">
        <a href="../Games/pac-man/pacman.php"><img src="../media/gamepage/pac-man-peach-retro-games-hd-wallpaper-thumb.jpg" /></a>
      </div>
      <div class="slide four">
        <a href="../Games/hangman/hangman.php"><img src="../media/gamepage/Hangman cover.png"></a>
      </div>
      <div class="slide five">
        <img src="../media/gamepage/Content not available.png" />
      </div>
      <div class="slide six">
        <img src="../media/gamepage/Content not available.png" />
      </div>
      <div class="slide seven">
        <img src="../media/gamepage/Content not available.png" />
      </div>
      <div class="slide eight">
        <img src="../media/gamepage/Content not available.png" />
      </div>
      <div class="slide nine">
        <a href="../Games/snake/snake.php"><img src="../media/gamepage/Panda-cover.jpg" /></a>
      </div>
    </div>
  </div>

  <!------------- Content End -------------->



  <!----------- Js ------------>
  <script src="https://cdn.jsdelivr.net/npm/rivescript/dist/rivescript.js"></script>
  <script src="../messages/chatbot/script.js"></script>
  <script src="../navbar/navToggle.js"></script>
  <script src="../messages/messages.js"></script>
  <!----------- Eind Js ------------>
</body>

</html>