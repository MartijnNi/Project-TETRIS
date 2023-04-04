document.getElementById("my-file").onchange = function() {
    if (this.files && this.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        // e.target.result is a base64-encoded url that contains the image data
        document.getElementById('profile-pic').setAttribute('src', e.target.result);
      };
      reader.readAsDataURL(this.files[0]);
    }
  }

// Game information show and hide

function toggleInfo() {
  var highScoresContainerShow = document.getElementById('highScoresContainerShow');
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





