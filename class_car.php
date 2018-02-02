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
$truck = new Car();

//this is how you call the function within the class
$lambo->moveWheels();
//$mercedes->moveWheels();

//don't need the dollar sign cus its used above in the class
//you can redefine the class outside.
//$lambo-> wheels=8;
echo $lambo-> wheels. "<br>";
echo $truck-> wheels=10;
echo $truck-> createDoors();
//echo $truck-> doors;



?>