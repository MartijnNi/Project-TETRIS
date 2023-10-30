// Create a new RiveScript interpreter
var rs = new RiveScript();

// Load the RiveScript file
rs.loadFile(["/Project-TETRIS/messages/chatbot/file1.rive", "/Project-TETRIS/messages/chatbot/substitutions.rive", "/Project-TETRIS/messages/chatbot/shortAwnsers.rive"])
  .then(function() {
    rs.sortReplies()
    console.log("RiveScript files loaded and sorted successfully!");
  })
  .catch(function(error) {
    console.log("Error loading RiveScript files: " + error);
  });
  
// Get references to the chat window and input field
var chatLog = document.querySelector(".chat-log");
var userInput = document.querySelector("#user-input");
var sendButton = document.querySelector("#send-btn");

// Function to add a new message to the chat log
function addMessage(type, message) {
  var chatMessage = document.createElement("div");
  chatMessage.classList.add("chat-message", type + "-message");
  chatMessage.innerHTML = "<p>" + message + "</p>";
  chatLog.appendChild(chatMessage);
}

// Handle user input
function handleInput() {
  var inputValue = userInput.value;

  // Clear the input field
  userInput.value = "";

  // Add the user's message to the chat log
  addMessage("user", inputValue);

  // Get the bot's reply
  rs.reply("local-user", inputValue).then(function(reply) {
    // Add the bot's message to the chat log
    addMessage("bot", reply);
  });
}

// Listen for the send button to be clicked
sendButton.addEventListener("click", handleInput);

// Listen for the enter key to be pressed in the input field
userInput.addEventListener("keypress", function(event) {
  if (event.keyCode === 13) {
    handleInput();
  }
});

//Array chatbot splash screen
var words = [
	"Hi there! Are you breaking records today? type 'help' for info!",
  "Sup! How you doing? type 'help' for info",
  "Waddupp! type 'help' for info",
  "Hi! What do you wanna know? type 'help' for info",
  "I can google anything for you! Type 'search' (something) or type 'help' for info",
  "Secrets aren't real when you're bot",
  "Its a me Mario! type 'help' for info"
];

function displayRandomSentence() {
	var randomIndex = Math.floor(Math.random() * words.length);
	var word = words[randomIndex];
	document.getElementById("splash-sentence").innerHTML = word;
}

displayRandomSentence();