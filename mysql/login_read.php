
<?php

// Read Data

//THE FOLLOWING IS A SQL COMMAND
$query= "SELECT * FROM users";

$result = mysqli_query($conn, $query);

if(!$result){
    die('Query failed' .mysqli_error() );
}


?>
<div class="container">
    <div class="col-sm-6">
        <?php

        //will return an associative array with the key value pairs and be able to read the columns
        //the fetch array method takes 2 parameters, the second being the result type;


        while($row =mysqli_fetch_array($result,MYSQLI_ASSOC)){

            //the pre element is displayed in a fixed-width font, preserving spaces and line breaks;
            //we wrap the print_r result in pre tag to make it readable like .pretty in MONGO DB
            ?>
            <pre>
                <?php
                print_r($row);
                ?>
            </pre>
        <?php

        }
        ?>

    </div>
</div>

