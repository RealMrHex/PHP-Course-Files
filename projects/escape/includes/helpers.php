<?php

function redirect($location)
{
    header('Location: /escape' . $location);
}

function logout()
{
    session_destroy();
}

function startGame($playerName)
{
    $_SESSION['player'] = strip_tags($playerName);
    $_SESSION['attempts_left'] = 3;
    $_SESSION['score'] = 0;
}

function playerName()
{
    return $_SESSION['player'];
}

function score()
{
    return $_SESSION['score'];
}

function attemptsLeft()
{
    return $_SESSION['attempts_left'];
}

function isPost()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST'; // true / false
}

function isGameOngoing()
{
    return isset($_SESSION['player']);
}