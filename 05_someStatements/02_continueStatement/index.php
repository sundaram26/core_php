<?php

    for($i=0; $i <= 10; $i++){
        if($i == 5){
            continue; //only 5 won't print
        }
        echo "$i<br/>";
    }

    echo "<br/> -------------------<br/><br/>";

    for($i=0; $i <= 10; $i++){
        if($i%2 == 0){
            continue; //It will skip printing of all the even number
        }
        echo "$i<br/>";
    }

?>