#A Bingo Game That Plays Itself

This is a  bit of code I worked on to model the
pesudo-random nature of both bingo-board generation,
and the act of calling bingo numbers.

Clone the repo, cd to the directory, and run `php go.php`.

You will be asked how many players are playing, 
and how many boards each player has. 
Then, your input is frankly irrelevant. 

Since participation in real bingo wholly amounts to 
searching and marking each number called in turn, interaction with
this bingo game ends once you decide these parameters. 
The computer will generate bingo boards, call numbers, 
mark numbers, check for a winner, and end the game once 
a BINGO is achieved.

The CLI will output the winning player's set of boards, 
marking each called number in green, 
and marking the winning board with a BINGO!