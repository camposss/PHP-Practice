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
<?php
//normal array
$number =array('juan','senor','john');
echo $number[2];

//associative array

//instead of index we changed the key to first_name and referring to the value as Edwin
$names= array("first_name" => 'Edwin', "last_name"=> 'Diaz');
print_r($names);
echo $names['first_name'].''. $names['last_name'];

?>
</body>
</html>
