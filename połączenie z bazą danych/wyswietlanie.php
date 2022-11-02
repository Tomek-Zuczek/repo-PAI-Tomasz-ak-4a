<?php
    $hostname = 'localhost';
    $database = 'dane_użytkownika';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $database);

    $query = "SELECT * FROM dane";
    $result = $conn->query($query);
    
    while($row = $result->fetch_assoc()){
        echo $row['login']. ' '. $row['haslo']. ' '."<br>";
    }
    
    $result -> close();
    $conn -> close();

?>