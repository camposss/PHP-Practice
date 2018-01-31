<?php
include "db.php";
//include "login.php";

//function readData(){
//    if (isset ($_GET['submit'])) {
//        global $conn;
//        $query = "SELECT * FROM users";
//
//        $result = mysqli_query($conn, $query);
//
//        if (!$result) {
//            die('Query failed' . mysqli_error());
//        } else {
//            echo 'the connections is working';
//        }
//
//
//    }
//}
function showReadData(){
    if(isset ($_GET['submit']) ) {

        global $conn;
        $query = "SELECT * FROM users";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die('Query failed' . mysqli_error());
        }else{
            echo 'the connections is working';
        }

        //will return an associative array with the key value pairs and be able to read the columns
        //the fetch array method takes 2 parameters, the second being the result type;

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $username = $row['username'];
            $password = $row['password'];
            $id = $row['id'];
            echo "<h1>$username</h1>";
            echo "<h4>$password</h4>";
            echo "<h6>$id</h6>";
            //the pre element is displayed in a fixed-width font, preserving spaces and line breaks;
            //we wrap the print_r result in pre tag to make it readable like .pretty in MONGO DB

        }
    }

}
function createData(){
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
        }else{
            echo 'record created';
        }

//    if($username && $password){
//        echo 'we got the data from the form';
//
//    }else{
//        echo 'please enter a username or password';
//    }

    }
}

function showAllData(){
    //you have to make sure the connection variable is global so you gain access to it

    global $conn;
    $query= "SELECT * FROM users";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query failed' . mysqli_error() );
    }


    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $id= $row['id'];
        echo "<option value='$id'>$id</option>";
    }

}
function updateData(){
    if(isset ($_POST['submit']) ) {

        global $conn;

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        //id is not wrapped in quotes because its an integer
        //make sure you put commas after the variables, BUT NOT BEFORE WHERE
        $query = "UPDATE users SET username = '$username', password = '$password' WHERE id =$id";

        $result = mysqli_query($conn, $query);
        if (!$result) {
            die('query was not made' . mysqli_error($conn));
        } else {
            echo 'record updated';
        }
    }
}
function deleteData(){
    if(isset ($_POST['submit']) ) {
        global $conn;

//    $username= $_POST['username'];
//    $password=$_POST['password'];

        $id = $_POST['id'];

        //id is not wrapped in quotes because its an integer
        //make sure you put commas after the variables, BUT NOT BEFORE WHERE
        $query = "DELETE from users WHERE id =$id";

        $result = mysqli_query($conn, $query);
        if (!$result) {
            die('query was not made' . mysqli_error($conn));
        } else {
            echo 'record deleted';
        }
    }
}

