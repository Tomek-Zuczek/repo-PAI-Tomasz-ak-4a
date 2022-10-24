<?php
    $cookie_name = "39";
    $cookie_value = "Hans Landa";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
    <body>

    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>

    <form action="./wyswitlanie-cookie.php" method="POST">

        <input type="button" value="Delete" name="delete"/>


    </form>

    <?php
        if(isset($_POST['delete'])){
            setcookie("39", "", time() - 3600);
        }
    ?>

    </body>
</html>