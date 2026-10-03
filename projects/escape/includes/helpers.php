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

function useAttempts()
{
    if(attemptsLeft() > 0)
    {
        $_SESSION['attempts_left']--;
    }

    return attemptsLeft();
}

function reward($reward)
{
    $_SESSION['score'] += (int)$reward;
    return score();
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

function setFlashMessage($message, $isSuccess)
{
    $_SESSION['flash']['message'] = $message;
    $_SESSION['flash']['success'] = $isSuccess;
}

function flashMessage()
{
    $_ = $_SESSION['flash'] ?? null;
    $_SESSION['flash'] = null;
    return $_;
}

function isFailed()
{
    return attemptsLeft() <= 0 && score() < 850;
}

function isSucceeded()
{
    return score() >= 850;
}