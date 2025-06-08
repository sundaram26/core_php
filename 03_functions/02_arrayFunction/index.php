<?php
    $cars = array(
        0 => 'Car1',
        1 => 'Car2',
        2 => 'Car3',
        3 => 'Car4',
        4 => 'Car5',
        5 => 'Car6',
    );

    $car2 = array(
        'Car9'
    );

    var_dump(is_array($cars));

    echo "<pre>";
        print_r($cars);
    echo "</pre>";

    echo array_search('Car4',$cars);
    echo "<br>";

    echo "<pre>";
        print_r(array_slice($cars, 2)); //removes first 2 element
    echo "</pre>";
    
    echo "<pre>";
        $chunked = array_chunk($cars, 2); //make array of 2 elements and put inside another array
        print_r($chunked); 
    echo "</pre>";


    echo "<pre>";
        $poped = array_pop($cars);   //returns last element of array
        print_r($poped); 
    echo "</pre>";
    
    array_push($cars, "Car7", "Car8");   //pushes new value in an array
    echo "<pre>";
        $poped = array_pop($cars);   
        print_r($poped); 
    echo "</pre>";
    
    echo "<pre>";
        print_r(array_keys($cars)); //give the keys of the array
    echo "</pre>";

    var_dump(array_key_exists("1", $cars));

    echo "<br>";
    echo count($cars);
    echo "<br>";

    echo "<pre>";
    print_r(array_count_values($cars));
    echo "</pre>";
    
    echo "<pre>";
    $merged_cars = array_merge($cars, $car2);
    print_r($merged_cars);
    echo "</pre>";

?>