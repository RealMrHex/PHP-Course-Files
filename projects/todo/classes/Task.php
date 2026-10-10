<?php

class Task
{
    protected $id;
    protected $title;
    protected $isDone;

    public function __construct($title, $isDone = false)
    {
        $this->id = rand(1000000, 9999999);
        $this->title = $title;
        $this->isDone = $isDone;
    }

    public function id()
    {
        return $this->id;        
    }

    public function title()
    {
        return $this->title;
    }

    public function isDone()
    {
        return $this->isDone;
    }

    public function toggle()
    {
        $this->isDone = !$this->isDone;
    }
}