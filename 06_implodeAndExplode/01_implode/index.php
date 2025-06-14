<!-- implode:- implode function returns a string from the elements of an array. -->
<!-- syntax:-implode(glue(string), pieces(array)) where glue:-separator and pieces is the array -->

<?php
    $arr = [
        '1', '2', '3', '4'
    ];

    $str = implode(", ", $arr);
    echo $str;
    
    echo "</br>";

    $arr2 = [
        "Hello",
        "Everyone",
        "How",
        "Are", 
        "You!"
    ];

    $greeting = implode(" ", $arr2);
    echo $greeting;    
?>