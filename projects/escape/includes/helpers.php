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
    $_SESSION['player'] = e($playerName);
    $_SESSION['attempts_left'] = 3;
    $_SESSION['score'] = 0;
}

function playerName()
{
    return $_SESSION['player'] ?? null;
}

function score()
{
    return $_SESSION['score'] ?? 0;
}

function attemptsLeft()
{
    return $_SESSION['attempts_left'] ?? 3;
}

function isPost()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST'; // true / false
}

function isGameOngoing()
{
    return isset($_SESSION['player']);
}

function e($needle)
{
    return htmlspecialchars($needle);
}