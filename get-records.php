<?php
// gets the data stored in the appropriate text file and returns it
$postedVars=$_POST;
$game=$postedVars['game'];
$file = $game."-records.txt";
echo file_get_contents($game."-records.txt");
?>