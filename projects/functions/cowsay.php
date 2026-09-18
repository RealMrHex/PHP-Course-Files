<?php

$_ = 'Hello World';
echo substr($_, 0, 12) . '<br>';
echo strlen($_);


#=================================

echo '<hr>';

// declared!
function sayHello()
{
    echo '<i>Hello</i><br>';
}

// run
sayHello();

echo '<hr>';
#=================================

function cowSay($word)
{
    $topLine = '';
    $bottomLine = '';

    if(strlen($word) > 21)
    {
        $word = substr($word, 0, 18) . '...';
    }

    for($i = 0; $i <= strlen($word); $i++)
    {
        $topLine .= '_';
        $bottomLine .= '-';
    }

    echo "<pre>
    $topLine
   < $word >
    $bottomLine
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
    </pre><hr>";
};

cowSay('Hello 0');
cowSay('Hello 1');
cowSay('Hello 2');
cowSay('Hello 3');


#=================================
$name = 'Armin';
$job = 'Developer';
$age = 25;
$location = 'Tehran';
// $bio = "This is $name, a $age y.o $job from $location.";
// echo $bio;

function bio($name, $job, $age, $location)
{
    $name = 'Armin';
    $job = 'Developer';
    $age = 25;
    $location = 'Tehran';
    echo "This is $name, a $age y.o $job from $location.<br>";
}