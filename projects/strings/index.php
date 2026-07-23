<?php

// String - Strings

$stringOne = "This is my first string!"; // string

$stringTwo = 'This is my second string!'; // string

echo $stringOne;
echo "<br>";
echo $stringTwo;
echo "<hr>";
//=================================================

# "I'm Armin."
$stringThree = '"I\'m Armin."';
echo $stringThree;
echo "<br>";
$stringFour = "\"I'm Armin.\"";
echo $stringFour;
echo "<hr>";

//=================================================

$firstName = 'Armin';
$stack = 'Developer!';

echo "Hello It's $firstName. I am a $stack";
echo "<br>";
echo 'Hello It\'s $firstName. I am a $stack';
echo "<br>";

//$final = 'Hello It\'s $firstName. I am a $stack';
$final = 'Hello It\'s ' . $firstName . '. I am a ' . $stack;
echo $final;