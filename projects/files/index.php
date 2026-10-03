<?php

$file = 'data/sample-1.txt';

if(!is_file($file))
{
    echo '<center><i><span>File not found. exiting.</span></i></center>';
    exit();
}

$stream = fopen($file, 'r');
echo '<i>';

echo fgets($stream) . '<br>'; #1
echo fgets($stream) . '<br>'; #2
echo fgets($stream) . '<br>'; #3

for($i = 0; $i < 28; $i++)
{
    echo fgetc($stream);
}
echo '<br>';

rewind($stream);

echo fgets($stream) . '<br>'; #1

fseek($stream, 5);
echo fgetc($stream);
echo ftell($stream);

if(feof($stream))
{
    echo 'End of file.';
}
else
{
    echo 'Not yet!';
}


while(!feof($stream))
{
    echo fgets($stream) . '<br>'; #1
}

echo '</i>';
fclose($stream);