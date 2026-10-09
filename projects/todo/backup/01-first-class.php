<?php

/**
 * Monitor Object
 * 
 * =======properties==========
 * - color: black|white
 * - display: ips|lcd
 * - brightness: 10000
 * - brand: apple|lg|sony|msi
 * 
 * =========method=============
 * powerOn
 * poweOff
 * plugIn
 * plugOut
 * play
 * pause
 * switchMode
 */

class Monitor
{
    public $color;
    public $display;
    public $brightness;
    public $brand;
    
    function powerOn(){}
    function poweOff(){}
    function plugIn(){}
    function plugOut(){}
    function play(){}
    function pause(){}
    function switchMode(){}
}

// bluprint
class Simple
{
    public $name = 'Armin';

    function sayHello()
    {
        echo "Hello";
    }
}

$simple1 = new Simple();
echo $simple1->name;