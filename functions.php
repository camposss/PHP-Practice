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


function saySomething ($christian){
    echo 'I want to say something to '. $christian;
}
saySomething('christian');


//returning values from a function

function addNumbers($number1, $number2){

    $sum = $number1+ $number2;
    return $sum;
}

//will return 3
$result=addNumbers(1,2);

//will return 103
$result = addNumbers(100,$result);

echo $result;


?>
</body>
</html>
