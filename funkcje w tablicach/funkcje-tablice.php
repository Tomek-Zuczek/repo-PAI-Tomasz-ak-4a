<?php
    $liczby = array(14, 27, 39, 45, 69, 4, 28, 99, 1, 10);
    $zdanie = "Bardzo lubię jeść dobre jedzenie";
    $temp = explode(' ',$zdanie);
    print_r ($liczby) ;
    echo '<br>';
    print_r ($temp);
    echo '<br>';


    $str = explode(' ', "Rano spóźniłem się na autobus");

    echo '<br>' ,'Ilość elementów tablicy 1: ' , count($liczby);
    echo '<br>' ,'Ilość elementów tablicy 2: ' , count($str);
    echo '<br><br>';

    sort($liczby, SORT_NUMERIC);
    sort($str, SORT_STRING);
    echo 'Sortowanie numeryczne: ';
    print_r ($liczby);
    echo '<br>';
    echo 'Sortowanie znakowe: ';
    print_r ($str);
    echo '<br><br>';

    shuffle($liczby);
    shuffle($str);
    print_r ($liczby);
    echo '<br>';
    print_r ($str);
    echo '<br><br>';

    
    echo current($liczby) . '<br>';
    next($liczby);
    next($liczby);
    echo current($liczby) . '<br>';

    reset($liczby);
    echo current($liczby);
?>