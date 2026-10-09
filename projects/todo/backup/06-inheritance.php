<?php

class Car
{
    private $model = 'Ford';

    public function sayModel()
    {
        return 'This is ' . $this->model . '<br>';
    }
}

class Mercedes extends Car
{
    public function sayBrand()
    {
        return 'This is brand';
    }
}

class Cls500 extends Mercedes
{

}

$c = new Cls500();
echo $c->sayBrand();