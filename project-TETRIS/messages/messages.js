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
		var div = document.getElementById("myDiv");
		div.addEventListener("click", myFunction);
	  
		function myFunction() {
		  // Do something when the div is clicked
		}