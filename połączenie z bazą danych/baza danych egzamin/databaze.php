<?php
    $hostname = 'localhost'; 
    $database = 'wedkowanie'; 
    $username = 'root'; 
    $password = ''; 

    $conn = mysqli_connect($hostname, $username, $password, $database);

    $query = "SELECT * FROM dane";
    $result = mysqli_query($conn, $query);


    while($row = mysqli_fetch_row($result)){
        echo $row[0]. '<br>' . $row[1];

    }
    
    
    $haslo = "Maciek";
    $login = "Maciek";

    $sql = "INSERT INTO `dane`(`haslo`, `login`)
            VALUES('$haslo', '$login')";
        
    mysqli_query($conn, $sql);

    mysqli_close($conn);
    ?>