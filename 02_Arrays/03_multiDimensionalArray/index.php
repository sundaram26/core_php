<?php

    $arr3 = array(
        'name' => 'Sundaram Singh',
        'company' => 'Masworld',
        'contact' => array("1234", "1232321"), //array inside array
        'age' => 21,
        'status' => true, 
    );

    $arr3['role'] = "Tech Developer";

    echo "<pre>";
    print_r($arr3);
    echo "</pre>";

?>