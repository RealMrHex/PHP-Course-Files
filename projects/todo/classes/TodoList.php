<?php

class TodoList
{
    private $id;
    private $title;
    private $tasks;

    public function __construct($title, $tasks = [])
    {
        $this->id = rand(1000000, 9999999);
        $this->title = $title;
        $this->tasks = $tasks;
    }

    public function id()
    {
        return $this->id;
    }

    public function title()
    {
        return $this->title;
    }

    public function tasks()
    {
        return $this->tasks;
    }

    public function add($task)
    {
        $this->tasks[] = $task;
    }
}