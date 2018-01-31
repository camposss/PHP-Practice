
<?php
include 'db.php';
include 'login.php';
// Create Data
if(isset ($_POST['submit']) ){
    $username =$_POST['username'];
    $password=$_POST['password'];

    $conn = mysqli_connect('localhost', 'root', 'root','loginapp',3306);

    if($conn){
        echo 'we are connected';
    }else{
        //die kills the connection
        die('database connection field');
    }
    //THE FOLLOWING IS A SQL COMMAND
    $query= "INSERT INTO users(username,password)";
    $query.= "VALUES ('$username', '$password')";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query failed' .mysqli_error() );
    }

//    if($username && $password){
//        echo 'we got the data from the form';
//
//    }else{
//        echo 'please enter a username or password';
//    }

}


?>