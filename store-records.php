<?php
// throws the $_POST array via JSON into the text file
$postedVars=$_POST;
$game=$postedVars['game'];
$file = $game."-records.txt";
unset($postedVars['game']); // remove game name from array
file_put_contents($file, json_encode($postedVars));
?>