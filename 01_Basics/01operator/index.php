<?php
    header('Content-type: text/plain');
    // echo "Hello world!";
    // $first = 5;
    // $First = 10; //case sensitive both first and First are different
    // echo $first;
    // echo $First;

    // $fName = "Sundaram";
    // $sName = " Singh";
    // echo $fName.$sName." Hello"


    //Arithmetic
    $a = 10;
    $b = 3;
    $c = $a + $b;
    echo "add: ".$c;
    $c = $a - $b;
    echo "\nsubs: ".$c;
    $c = $a * $b;
    echo "\nmulti: ".$c;
    $c = $a / $b;
    echo "\ndiv: ".$c;
    $c = $a % $b;
    echo "\nmodulus: ".$c;
    $c = $a++;
    echo "\nIncrement: ".$c;
    $c = $a--;
    echo "\nDecrement: ".$c;

     

    //comparision
    $x = 5;
    $y = 5;
    echo "\n";
    var_dump($x==$y);
    echo "\n";
    var_dump($x>$y);
    echo "\n";
    var_dump($x<$y);
    echo "\n";
    var_dump($x>=$y);
    echo "\n";
    var_dump($x<=$y);



    //Logical 
    $f = 1; //true
    $s = 0; //false
    $g = $a && $b;
    echo "\n";
    var_dump($g);
    $g = $a || $b;
    echo "\n";
    var_dump($g);
    $g = $a > $b ? $flag = "yess" : $flag = "No";
    echo "\n";
    echo $g;


    //Assignment
    $p = 5; //simple
    $b = 6;

    $a += $b; //Add and Assing $a = 5 + 6 = 11
    $a -= $b;
    $a *= $b;
    $a /= $b;
    $a %= $b;
    
?>