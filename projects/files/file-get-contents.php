<?php

$file = 'data/sample-1.txt';
$contents = '<i>could not read file content</i>';

if(file_exists('data/'))
{
    echo '👍';
}
if(file_exists('data/sample-1.txt'))
{
    echo '👍<br>';
}

if(is_dir('data/'))
{
    echo 'Data directory exists<br>';
}

if(!is_file($file))
{
    echo '<center><i><span>File not found. exiting.</span></i></center>';
    exit();
}

if(is_readable($file))
{
    echo 'READABLE ✅';
    $contents = file_get_contents($file);
}

echo '<br>';

if(is_writable($file))
{
    echo 'WRITABLE ✅';
}

echo '<br>';

if(is_executable($file))
{
    echo 'EXECUTABLE ✅';
}

echo '<br>';

echo "<pre>$contents</pre>";