<?php

$arr = [
    "HTML" => 2500,
    "CSS" => 2500,
    "JS" => 3000,
    "PHP" => 4000
];

echo "<pre>";
print_r($arr);
echo "<pre>";

foreach($arr as $course => $fees){
    echo "The fees of $course is $fees <br/>";
} 

?>