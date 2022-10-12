<?php

    if(isset($_POST['login'])){
        echo 'Login: ' , $_POST['login'];
        echo '<br>';
    }

    if(isset($_POST['haslo'])){
        echo 'Hasło: ' , sha1($_POST['haslo']);
        echo '<br>';
    }

    if(isset($_POST['dane'])){
        echo 'Pole "zapamiętaj" mnie zostało zaznaczone';
        echo '<br>';
        echo '<br>';
    }else{
        echo 'Pole "zapamiętaj mnie" nie zostało zaznaczone';
        echo '<br>';
        echo '<br>';
    }

    if(isset($_POST['Pseudonim'])){
        echo 'Pseudonim: ' , $_POST['Pseudonim'];
        echo '<br>';
    }

    if(isset($_POST['Komentarz'])){
        echo 'Komentarz: ' , $_POST['Komentarz'];
        echo '<br>';
        echo 'Komentarz: ' , $_POST['Komentarz'];
        echo '<br><br>';
    }

    if(isset($_POST['opcje'])){
        $zaznaczone = $_POST['opcje'];
        echo 'Na pytanie odpowiedziałeś: ' , $zaznaczone;
        echo '<br>';
    }

    if(isset($_POST['radio'])) {    
        foreach($_POST['radio'] as $value){
            echo "Jestem uczniem na roku: ".$value.'<br/>';
        }
    }
    
  

    if(isset($_POST['check'])) {    
        foreach($_POST['check'] as $value){
            echo "Chciałbym sie nauczyć: ".$value.'<br/>';
        }
    }
    
    
    



?>