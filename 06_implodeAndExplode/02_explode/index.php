<!-- explode:- explode() function breaks a string into an array and return it. -->
<!-- explode(separator(delimiter), string, limit);  limit means total indexes in array-->

<?php 
    $str = "A,B,C,D,E,F";
    $arr1 = explode(',', $str);

    echo "<pre>";
    print_r($arr1);
    echo "</pre>";


    $str2 = "Hello Everyone How Are You!";
    $arr2 = explode(' ', $str2, 2);

    echo "<pre>";
    print_r($arr2);
    echo "</pre>";


?>