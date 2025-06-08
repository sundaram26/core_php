<?php
    $age = 10;

    //only returns when condition is true
    if($age >= 18){
        echo "<br>Yes you can vote";
    } 

    //return either when condition is either true or false
    if($age >= 18){
        echo "<br>Yes you can vote";
    }else{
        echo "<br>No you are not eligible";
    }

    //returns when conditon is true and false with some other true and false conditions
    if($age >= 18){
        echo "<br>Yes you can vote";
    } elseif($age == 17){
        echo "<br>Wait for one more year";
    } else{
        echo "<br>No you are not eligible";
    }

    //nested if-else
    if($age >= 18){
        if($age<66){
            echo "<br>Yes you can vote";
        } else{
            echo "<br>You cannot vote anymore";
        }
    }else{
        echo "<br>You cannot vote";
    }
?>