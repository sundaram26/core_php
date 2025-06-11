<?php

    $age = 18;

    switch($age){
        case ($age >= 18 && $age <= 65):
            echo "Yes, You can vote";
            break;
        case  (18 - $age == 1):
            echo "Please wait one more year";
            break;
        default:
            echo "Sorry, you are not eligible";
            break;
    }

?>