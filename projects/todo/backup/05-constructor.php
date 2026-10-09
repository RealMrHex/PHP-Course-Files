<?php

class Car
{
    protected $brand;
    protected $model;

    public function __construct($brand = 'not-set', $model = 'unknown')
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }
}

$mercedes = new Car('Mercedes', 'CLS500'); # Constructed!
#$mercedes->setBrand('Mercedes');
#$mercedes->setModel('CLS500');

echo $mercedes->getBrand();
echo $mercedes->getModel() . '<br>';

$ford = new Car();
echo $ford->getBrand();
echo $ford->getModel() . '<br>';