<?php
var_dump($argv); 

$userInput = intval($argv[1]);

$antwoord1 = floor($userInput / 10);
if ($antwoord1 > 0) {
    echo "$antwoord1 X 10 euro". PHP_EOL;
}

$userInput %= 10;
$antwoord2 = floor($userInput / 5);
if ($antwoord2 > 0) {
    echo "$antwoord2 X 5 euro". PHP_EOL;
}

$userInput %= 5;
$antwoord3 = floor($userInput / 2);
if ($antwoord3 > 0) {
    echo "$antwoord3 X 2 euro". PHP_EOL;
}

$userInput %= 2;
$antwoord4 = $userInput;
if ($antwoord4 > 0) {
    echo "$antwoord4 X 1 euro";
}
?>