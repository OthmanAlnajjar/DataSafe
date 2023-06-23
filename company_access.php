<?php include "./controller/server.php";?>

<?php
include "header.php";

include "./controller/accessController.php";?>


    <?php if ($show==true) { ?>
    <form action="company_access.php" method="POST">
        <label for="sharingCode">Enter Sharing Code:</label>
        <input type="text" name="sharingCode" required>
        <input type="submit" value="Access User Data" class="btn">
    </form>
    <?php } ?>

<?php include "footer.php"?>
