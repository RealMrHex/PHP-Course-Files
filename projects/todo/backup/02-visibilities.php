<?php

// Visibility 
#=========================================================[Class]=====[Children]=====[Instance]======
# public    = accessible from anywhere                      ✅           ✅             ✅
# protected = accessible from itself and its children       ✅           ✅             ❌
# private   = accessible from itself only                   ✅           ❌             ❌
#=====================================================================================================
# Father
# - eyes color      [public]
# - height          [public] 1.8"
# - bones           [public]
# - IQ              [public]
# - blood pressure  [protected]
# - kindness        [private]
# - smoke           [private]
#------ Child
#        - eyes color
#        - height 1.9" overritten
#        - bones
#        - IQ
#        - blood pressure
#        - ?!
#        - ?!

class Father
{
    public $height = 180;
    protected $bloodPressure = true;
    private $isSmoking = true;

    public function echoHeight()
    {
        echo "180CM";
    }

    public function health()
    {
        echo "Height: 180CM, blood pressure: YES, smoking: yes";
    }

    protected function echoBloodPressure()
    {
        echo "Blood pressure ✅";
    }

    private function echoIsSmoking()
    {
        echo "Smoking ✅";
    }
}

$father1 = new Father();
$father1->health();
