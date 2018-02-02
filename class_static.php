<?php

class Car{
    //you have to use var within the class?

    //static is only attached to the class and not to the instances
    static $wheels = 4;
    var $hood=1 ;

    function moveWheels(){
        //we can still use this in PHP.
        Car::$wheels=10;
    }


}

$bmw = new Car();


//in order to refer to the static var in the class you need to
//use the familiar dot notation, using two dots with PHP
//you must use the $ because its not an instant
echo Car::$wheels;

//this way is deprecated now.
//echo Car::moveWheels();


//$bmw->wheels;
?>