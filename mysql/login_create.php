<?php
include "db.php";
include "functions.php";
include "includes/header.php";

createData();


?>

<div class="container">
    <div class="col-xs-6">
        <form action="login_create.php" method="post">
            <h1>Create a new user</h1>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name='username' class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class='btn btn-outline-success' type="submit" name="submit" value="create">
        </form>
    </div>
</div>

<?php include "includes/footer.php";