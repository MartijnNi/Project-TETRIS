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
    <link rel="stylesheet" href="/Project-TETRIS/Games/snake/snake.css">
    <link rel="stylesheet" href="/Project-TETRIS/navbar/navfooter.css">
    <link rel="stylesheet" href="/Project-TETRIS/messages/messages.css">
    <link rel="stylesheet" href="/project-TETRIS/messages/chatbot/style.css">

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
<!------------- Navbar End -------------->
<div id="Message" class="popupMessagesScreen">
		<div class="Messages-content">
			<span class="close" onclick="closeMessages()">&times;</span>
      <div class="messages-titel">
        <h4>Messages</h4>
      </div>
      <div class="friends-chat-container">
        <div class="left-friendlist">
          <div id="bot-friend"  onclick="MarioChat()">
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

  
<div id="img" src="/Project-TETRIS/Games/snake/snakehoofd-removebg-preview.png"></div>

<div class="playerScore">
  <p>Bamboo Eaten:</p> 
  <div id="score" class="score"> 0 </div>
</div>

<div class="game-board-canvas" id="game-board"></div>
  <div id="game-over" class="screen"> 
    <h1>Game Over!</h1>
    <p>Points earned: </p>
    
  <div id="score2" class="score2"> 0 <br></div> 
  <button id="btn" class="restartButton" onclick="game_restart()">Restart</button>
  </div>



<!----------- Js ------------>
<script>
  function game_restart() {
    window.location.reload();
  }
</script>



<script src="/Project-TETRIS/navbar/navToggle.js"></script>
<script src="/Project-TETRIS/Games/snake/game.js" defer type="module"></script>
<script src="https://cdn.jsdelivr.net/npm/rivescript/dist/rivescript.js"></script>
<script src="/Project-TETRIS/messages/chatbot/script.js"></script>
<script src="/Project-TETRIS/messages/messages.js"></script>

</body>
</html>




















