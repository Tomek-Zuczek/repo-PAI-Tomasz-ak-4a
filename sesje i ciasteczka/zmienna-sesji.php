<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>

    <?php
        echo "Favorite number is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite food is " . $_SESSION["favanimal"] . ".";
    ?>
    <br>

    <form action="./zmienna-sesji.php" method="POST">

        <input type="button" value="Destroy" name="destroy"/>


    </form>

    <?php
        if(isset($_POST['destroy'])){
            session_destroy();
        }

    ?>


    </body>
</html>