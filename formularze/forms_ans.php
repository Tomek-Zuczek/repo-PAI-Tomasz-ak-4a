<?php
        if(isset($_POST['dane'])){
            for($i=0; $i<count($_POST['dane']); $i++){
                echo sha1($_POST['dane'][$i] . "<br />");
            }
        }else{
            echo "Brak danych";
        }
        
?>