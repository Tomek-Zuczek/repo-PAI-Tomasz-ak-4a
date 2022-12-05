<?php
    session_start();

    $conn=new mysqli("localhost","root","","baza_szczecin");
    if($conn->connect_error){
        die("connection_failed");
    }
    echo "connected";


    $sql = "INSERT INTO recenzja (id, nazwa_restauracji, nazwa_potrawy, recenzja)
            VALUES('".$_POST['lokalizacja']."','".$_POST['potrawa']."','".$_POST['review']."')";

    if($result = $mysqli -> query($sql)) echo "Dodano rekord";
    else echo "Nie udało się dodac rekordu";
    $result -> free_result();
?>