<?php

//the following functions creates a file with write access
//you must open the the php file in the browser for it to work
$file= 'example.txt';

$handle= fopen($file, 'w');

fclose($handle);


?>