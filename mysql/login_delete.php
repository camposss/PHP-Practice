<?php
//requires db.php file before running this one. That way we have access to the conn variable
include "db.php";
include 'functions.php';
include "includes/header.php";

    deleteData();


?>

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

<?php include "includes/footer.php";
