		// Functie om de popup te openen
		function openMessages() {
			document.getElementById("Message").style.display = "block";
			document.getElementById("carousel").style.display = "none";
			document.getElementById("titelContainer").style.display = "none";		
		}

		// Functie om de popup te sluiten
		function closeMessages() {
			document.getElementById("Message").style.display = "none";
			document.getElementById("carousel").style.display = "block";
			document.getElementById("titelContainer").style.display = "block";
		}


		//mario div click
		var div = document.getElementById("bot-friend");
		div.addEventListener("click", myFunction);
	  
		function MarioChat() {
			var chatBox = document.getElementById("chat-box");
			if (chatBox.style.display === "none") {
			  chatBox.style.display = "block";
			} else {
			  chatBox.style.display = "none";
			}
		  }