<?php

    function p($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    $arr1 = [1, 2, 3, 4, 5, 6];
    p($arr1);

    function vote($age){
        if($age >= 18 && $age <= 65){
            return "Yes you are eligible for vote!";
        } else {
            return "No you cannot vote";
        }
    }
    $age = 24;
    echo "Age ".$age.", ".vote($age)."<br>";
    $age = 15;
    echo "Age ".$age.", ".vote($age)."<br>";

?>
