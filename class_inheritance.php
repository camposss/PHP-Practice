<?php

class Car{
    //you have to use var within the class?

    var $wheels = 4;
    var $hood=1 ;
    var $engine = 1;
    var $doors = 4;
    function moveWheels(){
        //we can still use this in PHP.
        $this->wheels=10;
        echo 'wheels move';
    }
    function createDoors(){
        $this->doors=6;
        echo "wheels are now 6";
    }

}

if(class_exists("Car")){

    echo "the class exists";
}
if(method_exists("Car","moveWheels")){

    echo "the method exists";
}

$lambo= new Car();

class Plane extends Car {

    var $wheels=20;

}
if(class_exists('Plane')){
    echo 'we have a class plane';
}
$jet = new Plane();
//$jet->moveWheels();
echo $jet->wheels;
?>