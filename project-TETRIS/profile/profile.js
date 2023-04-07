
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

function toggleInfo(buttonId, targetId) {
  var buttons = document.querySelectorAll('.gameButtons button');
  var targets = document.querySelectorAll('.toggleTarget');
  var highScoresContainerShow = document.getElementById('highScoresContainerShow');
  var highScoresGamesContainerShow = document.getElementById('highScoresGamesContainerShow');

  // hide all targets except the target corresponding to the button being clicked
  targets.forEach(function(target) {
    if (target.id === targetId) {
      if (target.style.display === 'none') {
        target.style.display = 'block';
        highScoresContainerShow.style.display = 'none';
        highScoresGamesContainerShow.style.display = 'block';
        console.log("aan");
      } else {
        target.style.display = 'none';
        highScoresGamesContainerShow.style.display = 'none';
        highScoresContainerShow.style.display = 'block';
        console.log("uit");
      }
    } else {
      target.style.display = 'none';
    }
  });

  // change the button color to indicate which button is active
  buttons.forEach(function(button) {
    if (button.id === buttonId) {
      button.style.backgroundColor = 'gray';
    } else {
      button.style.backgroundColor = '';
    }
  });
}

function previewImage() {
  var fileInput = document.getElementById('myFileInput');
  var file = fileInput.files[0];
  var reader = new FileReader();
  reader.onload = function(e) {
      var imgSrc = e.target.result;
      document.querySelector('.profilePicture').style.backgroundImage = 'url(' + imgSrc + ')';
      document.querySelector('img').src = imgSrc;
  }
  reader.readAsDataURL(file);
}