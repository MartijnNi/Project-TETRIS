
// Get the textarea element
const userStatusTextarea = document.getElementById("userStatus");

userStatusTextarea.addEventListener("keydown", function(event) {
  if (event.key === "Enter" && !event.shiftKey) {
    event.preventDefault();
    const form = document.querySelector("form");
    form.submit();
  }
}, {capture: true});


// Game information show and hide

function toggleInfo() {
  var highScoresContainerShow = document.getElementById('highScoresContainerShow');
  var highScoresGamesContainerShow = document.getElementById('highScoresGamesContainerShow');
  if (highScoresContainerShow.style.display === '') {
      highScoresContainerShow.style.display = 'none';
      highScoresGamesContainerShow.style.display = '';
      console.log("aan");
  } else {  
      highScoresGamesContainerShow.style.display = 'none';
      highScoresContainerShow.style.display = '';
      console.log("uit");
  }
} 

