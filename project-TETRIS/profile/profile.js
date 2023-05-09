


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
  var buttons = document.querySelectorAll(".button");
  buttons.forEach(function(button) {
    if (button.id === buttonId) {
      button.style.transform = "scale(1.03)";
      button.style.transition = "transform 0.1s";
    } else {
      button.style.transform = "scale(1.0)";
      button.style.transition = "transform 0.1s";
    }
  });
  

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
}