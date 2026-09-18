<?php

function bio($name, $age, $job, $location)
{
    echo "<i>This is $name, a $age y.o $job from $location.<br></i>";
}

bio('Armin', 25, 'developer', 'Tehran');

echo '<hr>';
#====================================================
// built-in functions

var_dump([]); // echo!
echo '<br>';
$len = strlen('Hello'); // return
echo $len;
echo '<br>';

function _echo($needle)
{
    echo $needle;
}
_echo('Calling the echo <hr>');

function sayHello()
{
    echo 'Hello<br>';
}

sayHello();
sayHello();
sayHello();

echo '<hr>';

function sum($x, $y)
{
    //return 10; // always return 10
    // $result = $x + $y;
    // return $result; // always return the result variable value
    return $x + $y;
}

$r = sum(20, 35); // 4
echo $r;
echo '<br>';
echo sum(9981423423, 123423423);