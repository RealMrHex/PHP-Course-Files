<?php

$x = 2;
$y = 4;

# echo $x + 10 . '<br>';
# echo $x . '<br>';

echo '<pre>';

echo '    X    |    Y    ' . '<br>';
echo "    $x    |    $y    " . '<br>';

$x = $x + 1;
echo "    $x    |    $y    " . '<br>';

$x = $x * 2;
echo "    $x    |    $y    " . '<br>';

$x = $x / 3;
echo "    $x    |    $y    " . '<br>';

$x = $x - 1;
echo "    $x    |    $y    " . '<br>';

$y = $y % 2; # 4 / 2 %= 0
echo "    $x    |    $y    " . '<br>';

$x = $x + 1;
echo "    $x    |    $y    " . '<br>';

$x = $x ** 2; # 2 x 2
echo "    $x    |    $y    " . '<br>';

$x++; # $x = $x + 1;
$y++;
$y++;
echo "    $x    |    $y    " . '<br>';

$x--; # $x = $x - 1;
echo "    $x    |    $y    " . '<br>';

$x += 4; # $x = $x + 4;
echo "    $x    |    $y    " . '<br>';

$x -= 5; # $x = $x - 5;
echo "    $x    |    $y    " . '<br>';

$x *= 3; # $x = $x * 3;
echo "    $x    |    $y    " . '<br>';

echo '</pre>';

echo '<hr>';

$a = '4';   // string
$b = (string)4;  // string

if($a == $b)
{
    echo 'A == B';
}
else
{
    echo 'A != B';
}
echo '<br>';

if($a === $b)
{
    echo 'A === B';
}
else
{
    echo 'A !== B';
}
echo '<br>';

if($a != $b)
{
    echo 'A != B';
}
else
{
    echo 'A == B';
}

echo '<br>';

if($a !== $b)
{
    echo 'A !== B';
}
else
{
    echo 'A === B';
}

$age = 20;
$age >= 18; // true!