<?php

$conn = mysqli_connect('localhost', 'root', 'root','loginapp',3306);

if(!$conn){
//die kills the connection
    die('database connection field');
}

?>