<?php
    session_start();
    
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $email=$_POST['email'];
    $pseudonim=$_POST['pseudonim'];

    $hostname = 'localhost';
    $database = 'baza_szczecin';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $database);

    $query = "UPDATE users SET Imie='".$imie."',Nazwisko='".$nazwisko."',Email='".$email."',Pseudonim='".$pseudonim."' WHERE Email = '".$_SESSION["mail"]."' ";
    ;$result = $conn->query($query);
    $_SESSION['mail'] = $email;
    Header("Location: http://localhost/repo-PAI-Tomasz-ak-4a/strona%20projket%20semestralny/projekt%20strony/main/?page=konto/konto&answer=chuj")
;?>