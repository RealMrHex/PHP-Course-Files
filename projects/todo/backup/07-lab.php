<?php

require __DIR__ . '/bootstrap.php';

$t1 = new Task('Task #1');
$t2 = new Task('Task #2', true);
$t3 = new Task('Task #3');

echo $t1->id() . ' | ' . $t1->title() . ' : ' . ($t1->isDone() ? 'DONE' : 'PENDING') . '<br>';
echo $t2->id() . ' | ' . $t2->title() . ' : ' . ($t2->isDone() ? 'DONE' : 'PENDING') . '<br>';
echo $t3->id() . ' | ' . $t3->title() . ' : ' . ($t3->isDone() ? 'DONE' : 'PENDING') . '<br>';
echo '<hr>';
$t2->toggle();
echo $t2->id() . ' | ' . $t2->title() . ' : ' . ($t2->isDone() ? 'DONE' : 'PENDING') . '<br>';
$t2->toggle();
echo $t2->id() . ' | ' . $t2->title() . ' : ' . ($t2->isDone() ? 'DONE' : 'PENDING') . '<br>';
$t2->toggle();
echo $t2->id() . ' | ' . $t2->title() . ' : ' . ($t2->isDone() ? 'DONE' : 'PENDING') . '<br>';

echo '<hr>';

$tasks = [
    $t1,
    $t2,
];
echo '<pre>';
print_r($tasks);
echo '</pre>';

echo '<hr>';


$tasks[] = $t3;
echo '<pre>';
print_r($tasks);
echo '</pre>';

echo '<hr>';
echo '<hr>';
echo '<hr>';

$list = new TodoList('Home');
$list->add($t1);
$list->add($t2);
$list->add($t3);

echo '<pre>';
print_r($list);
echo '</pre>';

echo '<hr>';
echo '<hr>';
echo '<hr>';

