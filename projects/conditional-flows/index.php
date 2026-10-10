<?php

$action = 'logout';

$result = match($action)
{
    'logout' => receiveAction('logout'),
    'create_list' => receiveAction('create_list'),
    'create_task' => receiveAction('create_task'),
    'toggle' => receiveAction('toggle'),
    default => 'not-valid'
};

echo $result;


function receiveAction($string)
{
    return strtoupper($string);
}

/*
switch($action)
{
    case 'logout':
    {
        echo "logout detected";
        break;
    }
    case 'create_list':
    {
        echo "create_list detected";
        break;
    }
    case 'create_task':
    {
        echo "create_task detected";
        break;
    }
    case 'toggle':
    {
        echo "toggle detected";
        break;
    }
    default:
    {
        echo "Action is not valid";
        break;
    }
}
*/

/*
if($action === 'logout')
{
    echo "Logout detected";
}
elseif($action === 'create_list')
{
    echo "Create List detected";
}
elseif($action === 'create_task')
{
    echo "Create Task detected";
}
elseif($action === 'toggle')
{
    echo "Toggle detected";
}
else
{
    echo "Action is not valid";
}
*/