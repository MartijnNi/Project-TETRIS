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
		<title>RetroGen</title>
	</head>
	<body>
		<!------------- Navbar -------------->

		<nav class="navbar">
			<div class="brand-titel">
				<a href="/project-TETRIS/gamepage/games.php"><h1>RetroGen</h1></a>
			</div>

			<a href="#" class="toggle-button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>

			<div class="navbar-links">
			<ul>
					<li><a href="/Project-TETRIS/gamepage/games.php">Games</a></li>
					<li><a href="/project-tetris/profile/profile.php"><?php echo $_SESSION['username']; ?></a></li>
					<img alt="profileP" height="60" src="/project-TETRIS/profile/ezgif.com-resize.jpg"/>
				</ul>
			</div>
		</nav>

		<!----------- Navbar End ------------>

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
                               <div class="profilePicture"></div> 
                               <input type="file" id="myFileInput" />
                               <div class="middle">
                                    <div class="text" onclick="document.getElementById('myFileInput').click()" value="select a file">Change Picture</div>
                                </div>
                                </div>
                               </div>
                               <div class="profilePictureContainerRight">
                               <div class="status">
                              <h1>Status</h1>
                              <textarea placeholder="What's going on?!" id="msg" name="msg" rows="5" cols="100"></textarea>
                            </div>
                            <div class="favoriteGame">
                                <h1>Favorite Game<h1><br>
                            <div class="dropdown">
            <button class="dropbtn">
                <h1>Favorite Game<h1>
            </button>
              
            <div class="dropdown-content">
                <a href="#">
                    <img url="/project-TETRIS/media/gamepage/reactinogame_thumbnail.png" 
                    width="20" height="15"> Tetris</a>
  
                <a href="#">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200630132504/uflag.jpg"
                    width="20" height="15"> Snake</a>
                <a href="#">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200630132502/eflag.jpg"
                    width="20" height="15"> Pac-Man</a>
                <a href="#">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200630132500/bflag.jpg"
                    width="20" height="15"> Reaction Game</a>
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200630132500/bflag.jpg"
                    width="20" height="15"> Memory</a>
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200630132500/bflag.jpg"
                    width="20" height="15"> Hangman</a>
            </div>
        </div>
                            </select>  
                            </div>
                            </div>
                         </div>



                            <div class="profileEditContainer">
                                <h1>Account Information:</h1>
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
                            <div class="highScoresContainer">
                                <p>Total Playtime:<p>
                                <p>Total Playcount:<p>
                                <p>Highscores:<p>
                            </div>
                            <div class="gamesContainer">
                                <p>Game Information</p>
                                <div class="gameButtons">
                                    <button>Tetris</button>
                                    <button>Pac-Man</button>
                                    <button>Snake</button>
                                    <button>Hangman</button>
                                    <button>Reaction Game</button>
                                    <button>Shooter</button>
                                    <button>???</button>
                                    <button>???</button>
                                </div>
                            </div>
                        </div>
                        </div>
					</div>
				</div>
			</div>
		</section>

		<!----------- Js ------------>
		<script src="/project-tetris/navbar/navToggle.js"></script>
		<!----------- Eind Js ------------>
	</body>
</html>