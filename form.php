<?php

//the values get put into an associative array held in post variable
//we want to check if submit value is set (using 'name' in input)
if(isset($_POST['submit'])){

    $minimun=5;
    $maximum=10;

    $name= array('John', 'christian', 'jessie', 'maria');
    $username= $_POST['username'];
    $password= $_POST['password'];

    if(!strlen($username)){
        echo 'Please enter a username';
    }
    if(!strlen($password)){
        echo 'Please enter a password';
    }
    //if username you type in is NOT FOUND IN THE ARRAY.
    //gotta make sure the data sent to us is 'sanitized'.
    if(!in_array($username,$name)){
        echo 'sorry you not allowed';
    }else{
        echo 'Welcome '. $username;
    }
    //you can then cache the user's name in session at a later video.

//    echo 'The password is '. $password;
}

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

<!--sending data using the post method.-->
<form action="form.php" method="post">
    <input type="text" name="username" placeholder="Enter username">
    <input type="password" name="password" placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">
</form>

</body>
</html>
