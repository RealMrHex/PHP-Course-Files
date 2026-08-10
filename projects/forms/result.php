<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method !== 'POST')
{
    header('Location: http://localhost/forms');
}

echo "<p>Request Method: " . $method . '</p>';

if($method === 'POST')
{
    echo 'POST detected';
    echo '<br>';
    var_dump($_POST);
}

if($method === 'GET')
{
    echo 'GET detected';
    echo '<br>';
    var_dump($_GET);
    echo '<br>';
    echo $_GET['query'];
}