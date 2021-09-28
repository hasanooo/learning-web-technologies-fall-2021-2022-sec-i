<?php
$a  = [
    [1,2,3,"A"],
    [1,2,"B","C"],
    [1,"D","E","F"]
];
/*
echo '<pre>';
print_r($a);
echo '<pre>';
echo "<br>";*/
for($i=0; $i <4 ;$i++){

    for($j=0;$j<4;$j++){
        
        echo $a[$i][$j] ." ";
    }
    echo "<br>";
}
 
for($i=3;$i>=1;$i--){

    for($j=1;$j<=$i;$j++){
        echo $j;
    }
    echo "<br>";
}
$c=65;
for($i=1;$i<=3;$i++){

    for($j=1;$j<=$i;$j++){
        echo chr($c)," ";
        $c++ ;
    }
    echo "<br>";
}
?>