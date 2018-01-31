<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="col-xs-6">
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name='username' class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class='btn btn-outline-success' type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>

<?php
//
//if(isset ($_POST['submit']) ){
//$conn = mysqli_connect('localhost', 'root', 'root','loginapp',3306);
//
//    if($conn){
//        echo 'we are connected';
//    }else{
//        //die kills the connection
//        die('database connection field');
//    }
//    if($username && $password){
//        $username =$_POST['username'];
//        $password=$_POST['password'];
//
//    }else{
//        echo 'please enter a username or password';
//    }
//
//
//    echo 'it worked';
//}
//
//
//?>

</body>
</html>