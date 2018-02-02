<?php

//the following functions creates a file with write access
//you must open the the php file in the browser for it to work
$file= 'example.txt';

if($handle= fopen($file, 'r')){

    //save it an a content variable and the 2nd parameter will be number of bytes
    //each byte = a character
    //you can use built in function filesize to read the entire length
    echo $content=fread($handle, filesize($file));
    fclose($handle);

}else{
    echo 'the files couldnt be written';
}



?>