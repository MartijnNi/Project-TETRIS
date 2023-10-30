
var userClick1 = 0;
var userClick2 = 0;
var fouten = 1;
var userSelectedCard1 = "";
var userSelectedCard2 = "";
var matches = 0;
 
function checkClickedCard(cardNum, cardId){
    playAudio()
//Geklikte kaart disablen, want je mag maar een keer op dezelfde kaart klikken
document.getElementById(cardId).disabled = true;
//juiste waarde op de kaart zetten
document.getElementById(cardId).style = "background-image: url(/project-tetris/games/memory/"+cardNum+".png)";
//document.getElementById(cardId).style = "background: url(myimage.png)";

//Lees en onthoudt klik1 en klik2
if(userClick1==0){
    userClick1 = cardNum;
    userSelectedCard1 = cardId;
}else{
    userClick2 = cardNum;
    userSelectedCard2 = cardId;
}

let delay = 1000; // delay in milliseconds
let canClick = true;

function onClick() {
  if (canClick) {
    canClick = false;
    setTimeout(function() {
      canClick = true;
    }, delay);
    
    // Put your click event code here
    console.log("Clicked!");
  }
}

// Attach the onClick function to your element
document.getElementById("myButton").addEventListener("click", onClick);

if(userClick2!=0){
if(userClick1==userClick2){
    document.getElementById('tekst').innerHTML = "Juist"
    matches++
    document.getElementById("setAudio").play()
    if(numberOfCards/2 == matches) {
        document.getElementById('tekst').innerHTML = "Gewonnen!"
       document.getElementById("winAudio").play()
    }
}else{
    document.getElementById('tekst').innerHTML = "Onjuist"
    document.getElementById(userSelectedCard1).disabled = false;
    document.getElementById(userSelectedCard2).disabled = false;
    fouten++
    setTimeout(throwback, 350)

}


updatefouten()
userClick1 = 0;
userClick2 = 0;
}
}

var numberOfCards = 24

function shuffleCards() {
    document.getElementById("memoryCards").innerHTML = '';
    cardsArr = new Array();
    for(i=0;i<numberOfCards / 2; i++){
        cardsArr.push(i);
        cardsArr.push(i);
        document.getElementById("shuffleAudio").play()
}
while(cardsArr.length>0){
    var randomNumber = Math.floor(Math.random() * (cardsArr.length));
    document.getElementById("memoryCards").innerHTML += '<input type="button" value="" id="kaart' + cardsArr.length +'" class="memoryCard" onclick="checkClickedCard(' + (cardsArr[randomNumber] +1) + ', \'kaart' +cardsArr.length + '\');" />';
    cardsArr.splice(randomNumber,1);
    }
    fouten=0
    matches=0
    updatefouten()
}

function throwback() {
    document.getElementById(userSelectedCard1).style = "";
    document.getElementById(userSelectedCard2).style = "";
}

function updatefouten() {
    document.getElementById('fouten').innerHTML = "fouten:"+fouten
}
function playAudio() {
    document.getElementById("myAudio").play()
}
