const cvs = document.getElementById("tetris");
const ctx = cvs.getContext("2d");

const ROW = 20;
const COL = (COLUMN = 10);
const SQ = (squareSize = 20);
const VACANT = "WHITE"; // kleur van de lege blokjes

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
	[Z, "#ff0000"],
	[S, "#ff9900"],
	[T, "#ffoooo"],
	[O, "#00ff00"],
	[L, "#00ffff"],
	[I, "#0000ff"],
	[J, "#ff00ff"],
];

//generate random piece
function randomPiece(){
	let r = randomN = Math.floor(Math.random() * PIECES.length) // 0-6
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
}

//draw a piece to the board

Piece.prototype.draw = function () {
	this.fill(this.color)
}

//undraw piece

Piece.prototype.unDraw = function () {
	this.fill(VACANT)
}

//move down the piece

Piece.prototype.moveDown = function() {
	if (!this.collision(0,1,this.activeTetromino)){
		this.unDraw();
		this.y++;
		this.draw();
	}else{
		//lock in the piece and generate a new piece
		this.lock();
		p = randomPiece();

	}
}

//move right function
Piece.prototype.moveRight = function() {
	if (!this.collision(1,0,this.activeTetromino)){
		this.unDraw();
		this.x++;
		this.draw();
	}else{
		//lock in the piece and generate a new piece
	}
}

//move right function
Piece.prototype.moveLeft = function() {
	if (!this.collision(-1,0,this.activeTetromino)){
		this.unDraw();
		this.x--;
		this.draw();
	}else{
		//lock in the piece and generate a new piece
	}
}
//rotate function
Piece.prototype.rotate = function() {
	let nextPattern = this.tetromino[(this.tetrominoN + 1)%this.tetromino.length]
	let kick = 0;

	if (this.collision(0,0,nextPattern)){
		if (this.x > COL/2){
			//right wall
			kick = -1;
		} else {
			//left wall
			kick = 1;
		}
	}

	if (!this.collision(kick,0,nextPattern)){
		this.unDraw();
		this.x += kick;
		this.tetrominoN = (this.tetrominoN + 1)%this.tetromino.length; // (0+1)%4 = 1
		this.activeTetromino = this.tetromino[this.tetrominoN]
		this.draw();
	} 
}


// control piece function

document.addEventListener("keydown", CONTROL);

function CONTROL(event){
	if (event.keyCode == 37){
		p.moveLeft();
	}else if (event.keyCode == 38) {
		p.rotate();
	}else if (event.keyCode == 39) {
		p.moveRight();
	}else if (event.keyCode == 40) {
		p.moveDown();
	}
}

//lock function
Piece.prototype.lock = function(){
	for (r = 0; r < this.activeTetromino.length; r++) {
		for (c = 0; c < this.activeTetromino.length; c++) {
			//we skip the vacant squares
			if (!this.activeTetromino[r][c]) {
				continue;
			}
			//pieces tolock on top = game over
			if (this.y + r < 0){
				alert ("Game Over!");
				//stop request animation frame]
				gameOver = true;
				break;
			}
			//lock the piece
			board[this.y+r][this.x+c]=this.color;
		}
	}
}

//collision detection function

Piece.prototype.collision = function(x,y,piece){
	for (r = 0; r < piece.length; r++) {
		for (c = 0; c < piece.length; c++) {
			//if square is empty, skip it
			if(!piece[r][c]){
				continue;
			}
			//coordinates of piece after movement
			let newX = this.x + c + x;
			let newY = this.y + r + y;

			//conditions
			if(newX < 0 || newX >= COL || newY >= ROW) {
				return true;
			}
			//skip newY
			if (newY < 0){
				continue;
			}
			//check if there is a locked piece on the board
			if(board[newY][newX] != VACANT){
				return true;
			}
		}
	}
	return false;
}

//drop the piece every 1s

let dropStart = Date.now();
let gameOver = false;
function drop(){
	let now = Date.now();
	let delta = now - dropStart;
	if(delta > 100) {
		p.moveDown();
		dropStart = Date.now();
	}
	if (!gameOver){
		requestAnimationFrame(drop);
	}
	
}

drop();


