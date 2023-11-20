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
		<link rel="stylesheet" href="/project-tetris/friends/friends.css" />
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

<div class="flex-container">
    <div class="friends-container">
        <div class="search-container">
            <form>
                <input type="text" class="friendsSearch" id="friendsSearch" name="" placeholder="Zoek Vrienden"></textarea>
                <input type="submit" name="" class="friendsButton" value="Add Friend"></input>
            </from>
            <div class="border-bottom">

            </div>
            
        </div>
        <div class="friends-display-container">
            <div class="friend-display">
            <div class="friend1">
                  <div class="friendTop">
                    <div class="friendPfp1"></div>
                    <div class="friendUsername1">Member 1</div>
                  </div>
                  <div class="friendBot">
                    <div class="friendStatus1">"echo biablabal"</div>
                    <div class="friendFavGame1">Favorite Game: Snake</div>
                    <button class="profileBtn1">Show Profile</button>
                  </div>
                </div>
                <div class="friend2">
                  <div class="friendTop">
                    <div class="friendPfp2"></div>
                    <div class="friendUsername2">Member 2</div>
                  </div>
                  <div class="friendBot">
                    <div class="friendStatus2">status</div>
                    <div class="friendFavGame2">friendfavgame</div>
                    <button class="profileBtn2">Show Profile</button>
                  </div>
                </div>
                <div class="friend3">
                  <div class="friendTop">
                    <div class="friendPfp3"></div>
                    <div class="friendUsername3">Member 3</div>
                  </div>
                  <div class="friendBot">
                    <div class="friendStatus3">status</div>
                    <div class="friendFavGame3">friendfavgame</div>
                    <button class="profileBtn3">Show Profile</button>
                  </div>
                </div>
                <div class="friend4">
                  <div class="friendTop">
                    <div class="friendPfp4"></div>
                    <div class="friendUsername4">Member 4</div>
                  </div>
                  <div class="friendBot">
                    <div class="friendStatus4">status</div>
                    <div class="friendFavGame4">friendfavgame</div>
                    <button class="profileBtn4">Show Profile</button>
                  </div>
                </div>
                <div class="friend5">
                  <div class="friendTop">
                    <div class="friendPfp5"></div>
                    <div class="friendUsername5">Member 5</div>
                  </div>
                  <div class="friendBot">
                    <div class="friendStatus5">status</div>
                    <div class="friendFavGame5">friendfavgame</div>
                    <button class="profileBtn5">Show Profile</button>
                  </div>
                </div>
                <div class="friend6">
                  <div class="friendTop">
                    <div class="friendPfp6"></div>
                    <div class="friendUsername6">Member 6</div>
                  </div>
                  <div class="friendBot">
                    <div class="friendStatus6">status</div>
                    <div class="friendFavGame6">friendfavgame</div>
                    <button class="profileBtn6">Show Profile</button>
                  </div>
                </div>
                <div class="friend7">
                  <div class="friendTop">
                    <div class="friendPfp7"></div>
                    <div class="friendUsername7">Member 7</div>
                  </div>
                  <div class="friendBot">
                    <div class="friendStatus7">status</div>
                    <div class="friendFavGame7">friendfavgame</div>
                    <button class="profileBtn7">Show Profile</button>
                  </div>
                </div>
                <div class="friend8">
                  <div class="friendTop">
                    <div class="friendPfp8"></div>
                    <div class="friendUsername1">Member 8</div>
                  </div>
                  <div class="friendBot">
                    <div class="friendStatus8">status</div>
                    <div class="friendFavGame8">friendfavgame</div>
                    <button class="profileBtn8">Show Profile</button>
                  </div>
                </div>

        </div>
    </div>

</div>

		<!----------- Js ------------>
    
		<script src="/project-tetris/navbar/navToggle.js"></script>
        <script src="/project-TETRIS/friends/friends.js"></script>
        <script src="/Project-TETRIS/messages/messages.js"></script>
		<!----------- Eind Js ------------>
	</body>
</html>