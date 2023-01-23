const cvs = document.getElementById("tetris");
const ctx = cvs.getContext("2d");

const ROW = 20;
const COL = COLUMN = 10;
const SQ = squareSize = 20; 
const VACANT = "WHITE"; // color of an empty square

//draw square

function drawSquare(x,y,color){
    ctx.fillStyle = color;
    ctx.fillRect(x*SQ,y*SQ,SQ,SQ);

    ctx.strokeStyle = "BLACK";
    ctx.strokeRect(x*SQ,y*SQ,SQ,SQ);

}
 drawSquare(0,0,"red");

 // create the board

let board = [];
for ( r = 0; r <ROW; r++){
        board[r] = [];
        for ( c =0; c < COL; c++){
            board [r][c] = VACANT;
}
}

// draw the board
function drawBoard(){
    for ( r = 0; r <ROW; r++){
            for ( c =0; c < COL; c++){
                drawSquare(c, r, board[r][c]);
    }
    }
}
drawBoard()

// the pieces and theur colors

const PIECES = [
    [Z,"#E40303"],
    [S,"#FF8C00"],
    [T,"#FFED00"],
    [O,"#008026"],
    [L,"#24408E"],
    [I,"#732982"],
    [J,"black"],
];

// initate a piece

let p = new Piece( PIECES[0][0] ,PIECES[0][1]);

//the object piece

function Piece(tetromino,color){
    this.tetromino = tetromino;
    this.color = color;

    this.tetrominoN = 0; // we start from the first pattern
    this.activeTetromino = this.tetromino[this.tetrominoN];

    // we need to control the pieces
    this.x = 0;
    this.y = 0;

}

// draw a piece to the board

Piece.prototype.draw = function(){
    for ( r = 0; r <this.activeTetromino.length; r++){
        for ( c =0; c < this.activeTetromino.length; c++){
            // we draw only occuppied squares
            if( this.activeTetromino[r][c]){
                drawSquare(this.x + c,this.y + r,this.color);


            }
}
}
}

p.draw();
