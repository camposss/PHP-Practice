<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


//global scope
$x = 'outside';


function convert(){
   //local scope can be changed to global with the keyword global
    global $x;
    $x ='inside';
}

echo $x;
convert();

//the value has been changed after calling the function by using global
echo $x;


$number=10;

//you have to define the variables to make it constant
define('Name', 1000);

echo Name;




?>
</body>
</html>
