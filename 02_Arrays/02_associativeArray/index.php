<?php

    $arr2 = array(
        'name' => 'Sundaram Singh',
        'company' => 'Masworld',
        'age' => 21,
        'status' => true, //it will show 1 while printing on page
    );

    $arr2['role'] = "Tech Developer";

    echo "<pre>";
    print_r($arr2);
    echo "</pre>";
?>