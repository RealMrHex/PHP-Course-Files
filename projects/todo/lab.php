<?php

require __DIR__ . '/bootstrap.php';

$app = App::initialize();

$gymList = new TodoList('Gym');

$t1 = new Task('Go to gym');
$t2 = new Task('Drink water');

$gymList->add($t1);
$gymList->add($t2);

$app->addList($gymList);

echo '<pre>'; 
print_r($app);
echo '</pre>';

App::logout();