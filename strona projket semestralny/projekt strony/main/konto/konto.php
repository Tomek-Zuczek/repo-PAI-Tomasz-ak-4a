    <?php
    session_start();

    $hostname = 'localhost';
    $database = 'baza_szczecin';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $database);

    $query = "SELECT * FROM users WHERE Email = '".$_SESSION['mail']."' ";
    $result = $conn->query($query);
    
    while($r = mysqli_fetch_array($result)){
        $row[]=$r['Imie'];
        $row1[]=$r['Nazwisko'];
        $row2[]=$r['Email'];
        $row3[]=$r['Pseudonim'];
    }

    $rowx = implode(",",$row);
    $rowx1 = implode(",",$row1);
    $rowx2 = implode(",",$row2);
    $rowx3 = implode(",",$row3);    
    
    
    $result -> close();
    $conn -> close();


    ?>
    
    <div class="dane">
        <h4 id="maintext">Moje konto:</h4>

        <p>Imię i nazwisko: <?php echo $rowx." ".$rowx1 ?> </p><br>
        <p>Adres email: <?php echo $rowx2?> </p><br>
        <p>Pseudonim: <?php echo $rowx3?> </p><br>
        <button class="edit">Edytuj pseudonim</button>

        <form action="./konto_mod.php" method="POST">
            <input type="text" name="imie" placeholder="imie">
            <input type="text" name="nazwisko" placeholder="nazwisko">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="pseudonim" placeholder="pseudonim">
            <input type="submit" value="Zatwierdź">
            
        </form>
        

    </div>