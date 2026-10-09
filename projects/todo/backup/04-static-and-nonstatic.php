<?php

class Car
{
    public $model = 'ford';
    public static $greeting = 'Hello';

    public function intro()
    {
        echo "Hello this is a car!<br>";
    }

    public static function hello()
    {
        echo "Hello this is an static call!<br>";
    }

    public function introAccess()
    {
        echo "<hr>";
        echo $this->model . '<br>';
        $this->intro();
        echo "<hr>";
    }

    public static function helloAccess()
    {
        echo "<hr>";
        echo self::$greeting . '<br>';
        self::hello();
        echo "<hr>";
    }
}

$ford = new Car();
$ford->intro();
echo $ford->model . '<br>';
$ford->introAccess();


Car::hello();
echo Car::$greeting . '<br>';
Car::helloAccess();