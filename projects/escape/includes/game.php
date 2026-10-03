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
    $puzzles = loadPuzzlesJson();
    return $puzzles;
}