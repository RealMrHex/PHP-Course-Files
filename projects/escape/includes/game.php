<?php

function loadPuzzlesJson()
{
    if(file_exists(PUZZLES))
    {
        return json_decode(file_get_contents(PUZZLES), true);
    }

    return [];
}


function puzzles()
{
    return loadPuzzlesJson();
}

function getPuzzleByObject($object)
{
    return puzzles()[$object];
}

function validatePuzzleAnswer($puzzle, $answer)
{
    if($puzzle['correct'] === $answer)
    {
        evaluateCorrectAnswer($puzzle);
        return true;
    }
    else
    {
        evaluateWrongAnswer($puzzle);
        return false;
    }
}

function evaluateCorrectAnswer($puzzle)
{
    $_SESSION['resolved'][$puzzle['object']] = true;
    reward($puzzle['reward']);
}

function evaluateWrongAnswer($puzzle)
{
    useAttempts();
}

function isPuzzleResolved($puzzle)
{
    return isset($_SESSION['resolved'][$puzzle['object']]);
}