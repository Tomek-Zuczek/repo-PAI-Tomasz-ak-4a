<?php
    if(isset($_POST['login'])){
        echo 'Login: ' , $_POST['login'];
        echo '<br>';
    }

    if(isset($_POST['haslo'])){
        echo 'Hasło: ' , sha1($_POST['haslo']);
    }
?>