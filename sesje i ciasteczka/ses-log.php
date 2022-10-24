<?php
    session_start();
?>

<!DOCTYPE html>
<head>
    <title>PAI</title>
    <meta charset="utf-8">
</head>

<body>

<form action="./ses-log.php" method=POST>
    <p>Logowanie użytkownika</p>
        <p>Login</p>
        <p><input type="text" name="login"></p>
        <br>
        Hasło
        <p><input type="password" name="haslo"></p>

        <input type="submit">
    </form>
    <?php
        if(isset($_POST['haslo'])){
            //'Hasło: ' , sha1($_POST['haslo']);
            //echo '<br>';
        }
        
        if(isset($_POST['login'])){
            //echo 'Login: ' , $_POST['login'];
            //echo '<br>';
        }
        $_SESSION["login"] = 'login';
        $_SESSION["haslo"] = 'haslo';
    ?>
    


<body>