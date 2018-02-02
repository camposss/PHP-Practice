<?php

//the following functions creates a file with write access
//you must open the the php file in the browser for it to work
$file= 'example.txt';

if($handle= fopen($file, 'w')){

    //you must open example.txt to check the results after opening this php file on the browser
    fwrite($handle, 'I love PHP and the file system');
    fclose($handle);

}else{
    echo 'the files couldnt be written';
}



?>