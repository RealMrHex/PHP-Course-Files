<?php

/**
 * int|integer
 * float/double
 * string
 * bool|boolean -> true|false
 * array
 * null
 */

#=======================[NULL DataType]=======================#
$firstName = null;        # initialized as an empty varaible! #
$lastName  = null;        # initialized as an empty varaible! #
$age       = null;        # initialized as an empty varaible! #
#=======================[NULL DataType]=======================#

$var1 = 10;   // int|integer
$var1 = '10'; // string

echo gettype((int)$var1);
echo (int)$var1;
echo '<hr>';

$var1 = 10;   // int|integer
var_dump($var1);
echo '<br>';
$var1 = '10'; // string
var_dump($var1);
echo '<br>';
$var1 = (int)'10'; // string -> int
var_dump($var1);
echo '<hr>';

$letters = ['a', 'b', 'c'];
var_dump($letters);

$letters = (int)$letters;
var_dump($letters);
echo $letters;

echo "<hr>";

$x = "10"; // string
$y = 20;   // integer
echo $x + $y; // 30!
echo "<br>";
echo $x . (string)$y; // 1020!