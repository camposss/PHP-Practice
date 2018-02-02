<?php

class Car{
    //you have to use var within the class?

    var $wheels = 4;
    var $hood=1 ;
    var $engine = 1;
    var $doors = 4;

    function __construct(){
        //we can still use this in PHP.
        echo $this->wheels=10;
    }

}
//upon instantiation automatically runs the construction method
//we want default values and methods for example the variables above the function
$bmw = new Car();
$truck = new Car();
$semi = new Car();

?>