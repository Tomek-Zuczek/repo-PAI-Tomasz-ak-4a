<?php
    $conn=new mysqli("localhost","root","","baza_szczecin");
    if($conn->connect_error){
        die("connection_failed");
    }
    echo "connected";
    $sql="INSERT INTO recenzje (potrawa, recenzja, restauracja) VALUES('".$_POST['potrawa']."','".$_POST['review']."','".$_POST['lokalizacja']."')";
    if($conn->query($sql)){
       header("Location: http://localhost/repo-PAI-Tomasz-ak-4a/strona%20projket%20semestralny/projekt%20strony/main/");
    }
    else{
        echo "not good";
        echo $conn->query($sql);
    }
    
?>