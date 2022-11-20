<?php


    $conn=new mysqli("localhost","root","","baza_szczecin");
    if($conn->connect_error){
        die("connection_failed");
    }
    echo "connected";
    $sql="INSERT INTO users(Email,Haslo,Imie,Kod_pocztowy,Nazwisko,Pseudonim) VALUES('".$_POST['email']."','".$_POST['haslo']."','".$_POST['imie']."','".$_POST['kod']."','".$_POST['nazwisko']."','".$_POST['pseudonim']."')";
    if($conn->query($sql)){
       header("Location: http://localhost/repo-PAI-Tomasz-ak-4a/strona%20projket%20semestralny/projekt%20strony/main/?page=logowanie/logowanie");
    }
    else{
        echo "not good";
        echo $conn->query($sql);
    }
    
?>
