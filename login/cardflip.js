var loginButton = document.getElementById("loginButton");
var registerButton = document.getElementById("registerButton");

loginButton.onclick = function(){
	document.querySelector("#flipper").classList.toggle("flip");
}

registerButton.onclick = function(){
	document.querySelector("#flipper").classList.toggle("flip");
}


	//Login password show

const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

  //register password show
  
const togglePassword2 = document.querySelector('#togglePassword2');
  const password2 = document.querySelector('#password2');

  togglePassword2.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});


//splashscreen arrays

var words = [
  'Do.. u wanna dance, baby?',
  'Is water wet?',
  'What do u like to do at a lake, play some snake?',
  'U again? Go get some bitches',
  'Did u find the milk?',
  'Life, laugh, love',
  'Life, cry, drink',
  'Does this make u happy?',
  'Do u know imagne dragons',
  'Imagne dragon these balls on ur face',
  'Do u know Candice', 
  'Best tetris player EUW here!!',
  'Skyblock',
  '242,5 bench baby',
  'Martin garix to be',
  'Hardstuck diamond btw',
  'Katankoe',
  'What is my purpose?',
  'Bowser or Browser..',
  'Pig',
  'Download if it is free',
  'NSFW',
  'Bored ape',
  'you have 4,5% that you read this'
];

function displayRandomWord() {
  var randomIndex = Math.floor(Math.random() * words.length);
  var word = words[randomIndex];
  document.getElementById("splash-screen").innerHTML = word;
}

displayRandomWord()
