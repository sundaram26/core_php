<?php
    //using funtion to print number
    function countNumber($start){
        echo "$start<br>";
        if($start < 10){
            $start++;
            countNumber($start);
        }
        return;
    }
    countNumber(1);

?>