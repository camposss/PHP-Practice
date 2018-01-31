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

$string= 'hello students';

//length of the string
echo strlen($string);

echo strtoupper($string);

echo strtolower($string);

//array functions

$list= [1,2,23,4,2,3,56,3];

echo max($list);

echo min($list);

//prints all the key/values
print_r($list);
sort($list);

$string =10;
$values= ['asdfasdf', 78797, 'asdfads', 8, $string];

//if the value is found in the array it will return 1 (no matter what $string is set to before), which is truthy,
//if not it will return nothing (undefined?), which is falsey.
$found = in_array($string,$values);
echo 'This is the variable found '. $found;


if($found){
   echo 'we did it';
}else{
    echo 'we messed up';
}



?>
</body>
</html>
