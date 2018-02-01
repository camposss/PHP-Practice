<?php


//all info saved in this associative array
//prebuilt function takes 3 parameters
$name = 'christian';
$value= 100;
$expiration= time() +(60*60*24*7);


setcookie($name, $value, $expiration);
//you can check if it was set going through google chrome advanced settings


//$_COOKIE;

?>
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

//we want to check if the cookie name was set in this associative array
if(isset($_COOKIE['christian'])){

    $someOne= $_COOKIE['christian'];
    //displays the VALUE of this name, since it associative array;
    echo $someOne;
}else{
    $someOne='';
}

?>


</body>
</html>