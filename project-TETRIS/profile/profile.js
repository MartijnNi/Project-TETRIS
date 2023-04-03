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