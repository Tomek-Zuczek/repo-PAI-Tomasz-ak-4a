<?php
    $hostname = 'localhost'; // Nazwa hosta
    $database = 'baza'; // Nazwa bazy danych
    $username = 'root'; // Nazwa użtytkownika
    $password = ''; // Hasło

    $conn = new mysqli($hostname, $username, $password, $database);

    //$query = "SELECT * FROM klient";
    //$result = $conn->query($query);

    //while($row = $result->fetch_assoc()){
        //echo $row['Adres_email']. ' '. $row['ID']. ' '. $row['Imie']. ' '. $row['Nazwiako']. ' '."<br>";
    //}


    $mail = "przykladowymail@gmail.com";
    $id = 6;
    $imie = "Włodek";
    $nazwisko = "Marciniak";

    $sql = "INSERT INTO `klient` (`ID`, `Imie`, `Nazwiako`, `Adres_email`)
            VALUES ('$id', '$imie', '$nazwisko', '$mail')";

    if($result = $conn -> query($sql)) echo "Dodano nowy rekord";
    else echo "Nie udało się dodać nowego rekordu";

    //$result -> close();
    //$conn -> close();

    
?>

