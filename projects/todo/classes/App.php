<?php

class App
{
    private $lists = [];

    public static function initialize()
    {
        if(!isset($_SESSION['app']) || $_SESSION['app'] instanceof App)
        {
            $_SESSION['app'] = new self();
        }

        return $_SESSION['app'];
    }

    public function lists()
    {
        return $this->lists;
    }

    public function addList($list)
    {
        $this->lists[] = $list;
    }

    public static function logout()
    {
        session_destroy();
        //header('Location: /lab.php');
    }
}