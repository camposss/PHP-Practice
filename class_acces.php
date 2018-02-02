<?php

class Car{

    //private only available to this class
    //protected available to this class and children
    //public available to all
    public $wheels = 4;
    protected $hood=1 ;
    private $engine = 1;
    var $doors = 4;

    function showProperty(){

        //we can use the engine ONLY inside this specific class
        echo $this->engine;
    }

}

$bmw = new Car();
//will return error because its protected, only can be used IN the class?
echo $bmw->showProperty();

//will return the actual property cus it's available in subclasses that extend it
//echo $bmw->showProperty();

$semi = new Semi();
class Semi extends Car {

    function showProperty(){
        //you can't use the engine property in this class or outside the other class
        echo $this->hood;
    }

}
//echo $bmw->showProperty();

echo $semi->showProperty();

?>