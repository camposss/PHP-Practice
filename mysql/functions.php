<?php
include "db.php";

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
