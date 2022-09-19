<?php
    require_once 'log.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn ->connect_error) die($conn->connect_error);

    $query = "SELECT * FROM classics";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;
    for($j =0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        echo 'autor: ' .$result->fetch_assoc()['autor'] .'<br>';
        $result->data_seek($j);
        echo 'id: ' .$result->fetch_assoc()['id'] .'<br>';
        $result->data_seek($j);
        echo 'nazwa: ' .$result->fetch_assoc()['nazwa'] .'<br>';
        $result->data_seek($j);
        echo 'rok: ' .$result->fetch_assoc()['rok'] .'<br>';
    }

    $result -> close();
    $conn -> close();
?>