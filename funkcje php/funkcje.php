<!DOCTYPE html>

<form action="./funkcje.php" method="POST">
    <p>Podaj swój wiek</p>
    <p><input type="number" name="wiek"></p>
</form>

<?php
    
        
      function wiek($liczba){
            if ($liczba < 0){
                echo "Podaj poprawny wiek";
            }else if ($liczba <= 18){
                echo "Jesteś pełnoletni";
            }else if ($liczba >= 18){
                echo "Jesteś pełoletni";
            }
        }

        if(isset($_POST['wiek'])){
            echo "Masz" . (int)$_POST('wiek') . "lata";
            $wyswietl = (int)$_POST['wiek'];
            wiek($wyswietl);
        }

?>

</html>