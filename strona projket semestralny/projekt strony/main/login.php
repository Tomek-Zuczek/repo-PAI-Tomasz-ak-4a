<?php
    session_start();

    $conn=new mysqli("localhost","root","","baza_szczecin");
    if($conn->connect_error){
        die("connection_failed");
    }
    echo "connected";

    $sql  = "SELECT Haslo FROM users WHERE Email = '".$_POST['email']."' AND Haslo = '".$_POST['haslo']."'";

    $result = $conn->query($sql);

    while($r = mysqli_fetch_array($result)){
        $haslo[]=$r['Haslo'];

    }

    $haslox = implode(",",$haslo);

    if($haslox==$_POST['haslo']){
        $_SESSION['mail'] = $_POST['email'];
        header("Location: http://localhost/repo-PAI-Tomasz-ak-4a/strona%20projket%20semestralny/projekt%20strony/main/");
    }
?>
