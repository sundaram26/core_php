<?php
    //index array
    $arr1 = array("Car1", "Car2", "Car3");
    $arr2 = [1, 2, 3, 4, 5]; //2nd method to create array

    //echo only used for string so echo can't print arrays
    echo "<pre>"; //to show in better format
    print_r($arr1);//to print array
    echo "</pre>";

    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

    //to print any element at specific index
    echo $arr1[2];

    //to push new value in array
    $arr1[4] = "Car4";
    //or    
    $arr1[] = "Car5";

    echo "<pre>"; 
    print_r($arr1); 
    echo "</pre>";
?>