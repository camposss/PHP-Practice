<?php
include "db.php";
include "functions.php";
include "includes/header.php";


?>
<div class="container">
    <div class="col-xs-6">
        <form action="login_read.php" method="get">
            <button type="submit" name="submit">Get Data</button>
        </form>
        <pre>
        <?php
            showReadData();
        ?>
        </pre>

<?php include "includes/footer.php";
