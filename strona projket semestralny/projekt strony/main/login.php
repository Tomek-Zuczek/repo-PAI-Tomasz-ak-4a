<?php
    session_start();

    $conn=new mysqli("localhost","root","","baza_szczecin");
    if($conn->connect_error){
        die("connection_failed");
    }
    echo "connected";

    $sql  = "SELECT Haslo FROM users WHERE Email = '".$_POST['email']."'";

    $result = $conn->query($sql);

    while($r=$result->fetch_assoc()){
        $haslo=$r['Haslo'];

    }

    if($haslo==$_POST['haslo']){
        $_SESSION['mail'] = $_POST['mail'];
        header("Location: http://localhost/repo-PAI-Tomasz-ak-4a/strona%20projket%20semestralny/projekt%20strony/main/");
    }
?>
