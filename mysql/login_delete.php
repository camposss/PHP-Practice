<?php
//requires db.php file before running this one. That way we have access to the conn variable
include "db.php";
include 'functions.php';
    deleteData();


?>
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
        <form action="login_delete.php" method="post">
            <h1>Delete DATA!</h1>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name='username' class="form-control">
            </div>
<!--            <div class="form-group">-->
<!--                <label for="password">Password</label>-->
<!--                <input type="password" name="password" class="form-control">-->
<!--            </div>-->
            <div class="form-group">

                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>
            <input class='btn btn-outline-danger' type="submit" name="submit" value="DELETE">
        </form>
    </div>
</div>
</body>
</html>

