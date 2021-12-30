<?php

require "bootstrap.php";

//using basic CLI interaction tips from https://stackoverflow.com/questions/5794030/interactive-shell-using-php

//echo "Play Bingo? (Y/N) - ";
//
//$stdin = fopen('php://stdin', 'r');
//$response = fgetc($stdin);
//if (strtoupper($response) == 'Y') {
    $game = new \Models\Game(3500,5);
    $game->play();
//}