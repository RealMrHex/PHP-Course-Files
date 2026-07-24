<?php

$user = [
    'first_name'    => 'Armin',
    'last_name'     => 'Hooshmand',
    'age'           => 17,
    'role'          => 'admin'
];

if($user['age'] >= 18)
{
    if($user['role'] == 'admin')
    {
        echo '<p style="color: green;">Admin Access Granted!</p>';
    }
    else if($user['role'] == 'user')
    {
        echo '<p style="color: skyblue;">User Access Granted!</p>';
    }
    else
    {
        echo '<p style="color: orange;">Guest Access Granted!</p>';
    }
}
else
{
    echo '<p style="color: red;">Access Denied!</p>';
}

/*
if(condition)
{
    // todo if condition passed. ✅
}
else if(condition)
{
    // todo if condition passed. ✅
}
// rest of else if...
else if(condition)
{
    // todo if condition passed. ✅
}
else
{
    // todo if condition NOT passed. ❌
}
*/