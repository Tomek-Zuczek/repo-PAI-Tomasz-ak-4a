<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>

    <?php

        $_SESSION["favcolor"] = 12;
        $_SESSION["favanimal"] = "kebap";
        echo "Session variables are set.";
    ?>

    </body>
</html>