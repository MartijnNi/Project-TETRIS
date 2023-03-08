const cvs = document.getElementById("tetris");
const ctx = cvs.getContext("2d");
const scoreElement = document.getElementById("score");
const scoreElement2 = document.getElementById("score2");
myaudio = document.getElementById("/tetrisAudio/03. A-Type Music (Korobeiniki).mp3");

const ROW = 20;
const COL = (COLUMN = 10);
const SQ = (squareSize = 39);
const VACANT = "#2c2c2c"; // kleur van de lege blokjes
var display = 0;
var div = document.getElementById("game-over");
let gameOver = false;

//teken het blok
function drawSquare(x, y, color) {
	ctx.fillStyle = color;
	ctx.fillRect(x * SQ, y * SQ, SQ, SQ);

	ctx.strokeStyle = "BLACK";
	ctx.strokeRect(x * SQ, y * SQ, SQ, SQ);
}

//het bord maken

let board = [];
for (r = 0; r < ROW; r++) {
	board[r] = [];
	for (c = 0; c < COL; c++) {
		board[r][c] = VACANT;
	}
}

//teken het bord
function drawBoard() {
	for (r = 0; r < ROW; r++) {
		for (c = 0; c < COL; c++) {
			drawSquare(c, r, board[r][c]);
		}
	}
}

drawBoard();

//the pieces and their colors

const PIECES = [
	[I, "#B800FF"],
	[O, "#ED00FF"],
	[T, "#FF00B7"],
	[S, "#FF4C79"],
	[Z, "#FF964E"],
	[J, "#FFCD47"],
	[L, "#F9F871"],

	/*	oude kleuren
	[I, "#00ffff"],
	[O, "#ffff00"],
	[T, "#800080"],
	[S, "#00ff00"],
	[Z, "#ff0000"],
	[J, "#0000ff"],
	[L, "#ff7f00"],
	*/
];

//generate random piece
function randomPiece() {
	let r = (randomN = Math.floor(Math.random() * PIECES.length)); // 0-6
	return new Piece(PIECES[r][0], PIECES[r][1]);
}
let p = randomPiece();
//the objext piece

function Piece(tetromino, color) {
	this.tetromino = tetromino;
	this.color = color;

	this.tetrominoN = 0; //we start from the first pattern
	this.activeTetromino = this.tetromino[this.tetrominoN];

	//we need to control the pieces
	this.x = 3;
	this.y = -2;
}

//fill function
Piece.prototype.fill = function (color) {
	for (r = 0; r < this.activeTetromino.length; r++) {
		for (c = 0; c < this.activeTetromino.length; c++) {
			//we draw only occupied squares
			if (this.activeTetromino[r][c]) {
				drawSquare(this.x + c, this.y + r, color);
			}
		}
	}
};

//draw a piece to the board

Piece.prototype.draw = function () {
	this.fill(this.color);
};

//undraw piece

Piece.prototype.unDraw = function () {
	this.fill(VACANT);
};

Piece.prototype.hardDrop = function () {
	if (!this.collision(0, 1, this.activeTetromino)) {
		this.unDraw();
		do {
			this.y++;
		} while (!this.collision(0, 1, this.activeTetromino));
		this.draw();
		this.lock();
		p = randomPiece();
		this.y++;
		this.y++;
	}
};

//move down the piece

Piece.prototype.moveDown = function () {
	if (!this.collision(0, 1, this.activeTetromino)) {
		this.unDraw();
		this.y++;
		this.draw();
	} else {
		//lock in the piece and generate a new piece
		this.lock();
		p = randomPiece();
	}
};

//move right function
Piece.prototype.moveRight = function () {
	if (!this.collision(1, 0, this.activeTetromino)) {
		this.unDraw();
		this.x++;
		this.draw();
	} else {
		//lock in the piece and generate a new piece
	}
};

//move right function
Piece.prototype.moveLeft = function () {
	if (!this.collision(-1, 0, this.activeTetromino)) {
		this.unDraw();
		this.x--;
		this.draw();
	} else {
		//lock in the piece and generate a new piece
	}
};
//rotate function
Piece.prototype.rotate = function () {
	let nextPattern = this.tetromino[(this.tetrominoN + 1) % this.tetromino.length];
	let kick = 0;

	if (this.collision(0, 0, nextPattern)) {
		if (this.x > COL / 2) {
			//right wall
			kick = -1;
		} else {
			//left wall
			kick = 1;
		}
	}

	if (!this.collision(kick, 0, nextPattern)) {
		this.unDraw();
		this.x += kick;
		this.tetrominoN = (this.tetrominoN + 1) % this.tetromino.length; // (0+1)%4 = 1
		this.activeTetromino = this.tetromino[this.tetrominoN];
		this.draw();
	}
};

// control piece function
function triggerKeys() {
	document.addEventListener("keydown", CONTROL);
	drop();
}

function CONTROL(event) {
	if (event.keyCode == 37) {
		p.moveLeft();
	} else if (event.keyCode == 38) {
		p.rotate();
	} else if (event.keyCode == 39) {
		p.moveRight();
	} else if (event.keyCode == 40) {
		p.moveDown();
	} else if (event.keyCode == 32) {
		p.hardDrop();
	}
}

let score = 0;
//lock function
Piece.prototype.lock = function () {
	for (r = 0; r < this.activeTetromino.length; r++) {
		for (c = 0; c < this.activeTetromino.length; c++) {
			//we skip the vacant squares
			if (!this.activeTetromino[r][c]) {
				continue;
			}
			//pieces tolock on top = game over
			if (this.y + r < 0) {
				//stop request animation frame]
				gameOver = true;
				r = this.activeTetromino.length;
				display = 1;
				endScreen();
			}
			//lock the piece
			board[this.y + r][this.x + c] = this.color;
		}
	}

	//remove full rows

	for (r = 0; r < ROW; r++) {
		//forloop to loop over all the rows of the board
		let isRowFull = true; //new variable to true
		for (c = 0; c < COL; c++) {
			// full loop to loop over the columns
			isRowFull = isRowFull && board[r][c] != VACANT; //
		}
		if (isRowFull) {
			//if the row is full
			//we move all the rows above it down
			for (y = r; y > 1; y--) {
				for (c = 0; c < COL; c++) {
					board[y][c] = board[y - 1][c];
				}
			}
			//top row board[0][..] has no row above it
			for (c = 0; c < COL; c++) {
				board[0][c] = VACANT;
			}
			score += 1;
		}
	}

	//update the board
	drawBoard();

	//update the score
	scoreElement.innerHTML = score;
	scoreElement2.innerHTML = score;
};

//collision detection function

Piece.prototype.collision = function (x, y, piece) {
	for (r = 0; r < piece.length; r++) {
		for (c = 0; c < piece.length; c++) {
			//if square is empty, skip it
			if (!piece[r][c]) {
				continue;
			}
			//coordinates of piece after movement
			let newX = this.x + c + x;
			let newY = this.y + r + y;

			//conditions
			if (newX < 0 || newX >= COL || newY >= ROW) {
				return true;
			}
			//skip newY
			if (newY < 0) {
				continue;
			}
			//check if there is a locked piece on the board
			if (board[newY][newX] != VACANT) {
				return true;
			}
		}
	}
	return false;
};

//drop the piece every 1s

let dropStart = Date.now();
if (score < 1) {
	function drop() {
		let now = Date.now();
		let delta = now - dropStart;
		document.getElementById("tetrisAudio").play();
		if (score >= 0) {
			if (delta > 1000) {
				p.moveDown();
				dropStart = Date.now();
			}
		}
		if (score >= 5) {
			if (delta > 850) {
				p.moveDown();
				dropStart = Date.now();
			}
		}
		if (score >= 10) {
			if (delta > 700) {
				p.moveDown();
				dropStart = Date.now();
			}
		}
		if (score >= 15) {
			if (delta > 550) {
				p.moveDown();
				dropStart = Date.now();
			}
		}
		if (score >= 20) {
			if (delta > 400) {
				p.moveDown();
				dropStart = Date.now();
			}
		}
		if (score >= 25) {
			if (delta > 250) {
				p.moveDown();
				dropStart = Date.now();
			}
		}
		if (score >= 30) {
			if (delta > 200) {
				p.moveDown();
				dropStart = Date.now();
			}
		}
		if (score >= 35) {
			if (delta > 150) {
				p.moveDown();
				dropStart = Date.now();
			}
		}
		if (score >= 40) {
			if (delta > 100) {
				p.moveDown();
				dropStart = Date.now();
			}
		}
		if (score >= 70) {
			if (delta > 75) {
				p.moveDown();
				dropStart = Date.now();
			}
		}
		if (score >= 100) {
			if (delta > 20) {
				p.moveDown();
				dropStart = Date.now();
			}
		}
		if (!gameOver) {
			requestAnimationFrame(drop);
		}
	}
}

function refreshPage() {
	window.location.reload();
}

function showGameOver() {
	cancelAnimationFrame(rAF);
	gameOver = true;

	context.fillStyle = "black";
	context.globalAlpha = 0.75;
	context.fillRect(0, canvas.height / 2 - 30, canvas.width, 60);

	context.globalAlpha = 1;
	context.fillStyle = "white";
	context.font = "36px monospace";
	context.textAlign = "center";
	context.textBaseline = "middle";
	context.fillText("GAME OVER!", canvas.width / 2, canvas.height / 2);
}

function endScreen() {
	if (display == 1) {
		div.style.display = "block";
		display = 0;
	} else {
		div.style.display = "none";
		display = 1;
	}
}
