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
	[Z, "#ff6666"],
	[S, "#66ff66"],
	[T, "#66ffff"],
	[O, "#6666ff"],
	[L, "#B266ff"],
	[I, "#ff66ff"],
	[J, "#ff66b2"],
];

//initiate a piece

let p = new Piece(PIECES[0][0], PIECES[0][1]);

//the objext piece

function Piece(tetromino, color) {
	this.tetromino = tetromino;
	this.color = color;

	this.tetrominoN = 0; //we start from the first pattern
	this.activeTetromino = this.tetromino[this.tetrominoN];

	//we need to control the pieces
	this.x = 0;
	this.y = 0;
}

//draw a piece to the board

Piece.prototype.draw = function () {
	for (r = 0; r < this.activeTetromino.length; r++) {
		for (c = 0; c < this.activeTetromino.length; c++) {
			//we draw only occupied squares
			if (this.activeTetromino[r][c]) {
				drawSquare(this.x + c, this.y + r, this.color);
			}
		}
	}
};

p.draw();
