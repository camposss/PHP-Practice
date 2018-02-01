<?php
//requires db.php file before running this one. That way we have access to the conn variable
include "db.php";
include 'functions.php';
include "includes/header.php";

    updateData();



?>
<div class="container">
    <div class="col-xs-6">
        <h1>UPDATE DATA</h1>
        <form action="login_update.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name='username' class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">

                <select name="id" id="">
                    <?php
                        showAllData();
                    ?>
                </select>
            </div>
            <input class='btn btn-outline-primary' type="submit" name="submit" value="UPDATE">
        </form>
    </div>

<?php include "includes/footer.php";


