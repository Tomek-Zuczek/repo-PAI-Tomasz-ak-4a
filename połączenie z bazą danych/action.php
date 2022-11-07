<?php
    
    $login = "";
    $haslo = "";
    
    if(isset($_POST['save'])){
        if(isset($_POST['login'])){
            $login = (string)$_POST['login'];
        }

        if(isset($_POST['haslo'])){
            $haslo = (string)sha1($_POST['haslo']);
        }
    }


    $hostname = 'localhost';
    $database = 'dane_użytkownika';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $database);

    $sql = "INSERT INTO `dane` (`login`, `haslo`) 
            VALUES ('$login', '$haslo')";

    if($result = $conn -> query($sql)){
        echo "Dodano nowy rekord";
    }else{
        echo "Nie udało się dodac nowego rekordu";
    } 
?>

