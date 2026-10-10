<?php

class Request
{
    private $action;

    public static function handle()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']))
        {
            $request = new self();
            $request->action = $_POST['action'];
            $request->process();
        }

        return;
    }

    private function process()
    {
        match($this->action)
        {
            'logout' => $this->logout(),
            'create_list' => $this->createList(),
            'create_task' => $this->createTask(),
            'toggle' => $this->toggle(),
        };
    }

    private function logout()
    {
        App::logout();
    }

    private function createList()
    {
        
    }
    private function createTask()
    {
        
    }

    private function toggle()
    {
        
    }

}