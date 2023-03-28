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
        <div class="brand-titel"><a href="/project-TETRIS/gamepage/games.php"><h1>RetroGen</h1></a>
        </div>
    
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
    
        <div class="navbar-links">
            <ul>
                <li><a href="/project-TETRIS/gamepage/games.php">Games</a></li>
                <li><a href="#">Vrienden</a></li>
                <li><a href="#">Profiel</a></li>
                <li><a href="#" style="color: rgb(200, 0, 0);">Uitloggen</a></li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="reactText">
        <h1>Reaction Game!</h1>
    </div>
    <div class="fieldFlexbox">
        <div class="field" id="field">
        <p>Klik op mij wanneer ik groen word!<br><br></p>
        <button class="button-54" id="startGame" role="button" onclick="startGame()">Start</button>
    </div>
    </div>

    
    <!-- Javascript -->
    <script src="/project-TETRIS/Games/reactiongame/reaction.js"></script>
    <script src="/project-TETRIS/navbar/navToggle.js"></script>
</body>
</html>