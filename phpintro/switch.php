<?php
$a= "A";
$a=(!empty($_GET('a'))) ? $_GET('a'): null;
$b=(!empty($_GET('b'))) ? $_GET('b'): null;

switch ($a) {
    case 'A':
    if ($a=='A+'){
        echo "Perfecto";
    }
    elseif($a=='A-'){
        echo "Excellent";
    }
    else {
        echo "Excellent-O";
    }
        break;
    
    case 'B':
    echo "Good";
    break;
    
    case 'C':
    echo "Well Done";
    break;
    
    case 'D':
    echo "You passed";
    break;

    default:
        echo "wrong input";
        break;
}