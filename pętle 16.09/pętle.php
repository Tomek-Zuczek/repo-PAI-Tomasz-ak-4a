<?php
    

    /*
    for ($liczba=1; $liczba<=10; $liczba++)
    {
        for ($liczba2=1; $liczba2<=10; $liczba2++)
        {
            
            echo($liczba."*".$liczba2."=".($liczba*$liczba2)."<br>");
            
        }
        echo "<br>";
    }
    */
    
    $wysokosc = 5;
    $szerokosc = 5;

    for($pion=0;$pion<$wysokosc;$pion++)
    {
        for($poziom=0;$poziom<$szerokosc;$poziom++)
        {
            echo "*";
        }
        echo "<br>";

    }
    
    echo "<br>";
    

    
    $wysokosc = 5;
    $szerokosc = 5;

    for($pion=1;$pion<$wysokosc;$pion++)
    {
        for($poziom=1;$poziom<$szerokosc;$poziom++)
        {
            if($pion == 1 || $pion == $wysokosc)
            {
                echo "*";
            }
            else if($poziom == 1 || $poziom == $szerokosc)
            {
                echo "*";
            }
            else
            {
                echo "_";
            }
        }
        echo "<br>";
        
    }
    
    
    
    


?>