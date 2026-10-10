<?php

require __DIR__ . '/classes/Task.php';
require __DIR__ . '/classes/TodoList.php';
require __DIR__ . '/classes/App.php';
require __DIR__ . '/classes/Request.php';

session_start();

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}