<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="memory.js"></script>
    <link rel="stylesheet" href="memory.css">
    <title>Memory</title>
</head>

<body onload="shuffleCards()">
        <div class="memoryContainer">
        <h1>Memory</h1>
        <div id="memoryCards"></div>
        <div class="fouten" id="fouten"></div>
        <div id="gewonnen"></div>
        <div class="tekst" id="tekst">Resultaat</div>
        </div>
        <audio id="myAudio">
            <source src="audio/bliepklik.mp3" type="audio/mpeg">
          </audio> 
          <audio id="winAudio">
            <source src="audio/winnaar.mp3" type="audio/mpeg">
          </audio>
          <audio id="setAudio">
            <source src="audio/set.mp3" type="audio/mpeg">
          </audio>
          <audio id="shuffleAudio">
            <source src="audio/flipcards.mp3" type="audio/mpeg">
          </audio>
          
          
          <span><a onclick="shuffleCards()"></a></span>
</body>
</html>