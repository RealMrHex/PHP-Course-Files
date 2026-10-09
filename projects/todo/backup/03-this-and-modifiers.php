<?php

class Car
{
    private $brand = 'ford';
    public $model;
    public $year;

    // Getter
    public function echoBrand()
    {
        echo 'Car brand is ' . ucfirst($this->brand) . '<br>';
    }

    // Setter
    public function setBrand($brand)
    {
        $this->brand = strtolower($brand);
    }

    public function iranKhodro()
    {
        $this->setBrand('IranKhodro');
        $this->echoBrand();
    }
}


$car = new Car();
$car->echoBrand();
$car->setBrand('Mercedes');
$car->echoBrand();
$car->iranKhodro();