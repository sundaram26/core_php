<?php
//print hello 10 times
$i = 0;
while($i < 10){
    echo "Hello<br/>";
    $i++;
}
echo "<br>++++++++++++++++++++++++++<br><br>";

//write a function to print table
function printTable($num){
    $i=1;
    while($i<=10){
        echo $num." * ".$i." = ".$num*$i."<br/>";
        $i++;
    }
}

printTable(2);

?>