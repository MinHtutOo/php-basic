<?php

$ary = array(
    array("One", "Two", "Three", "Four", "Five"),
    array("Six", "Seven", "Eight", "Nine", "Ten"),
    array("Eleven", "Twelve" ,"Thirteen", "Fourteen", "Fifteen")
);

for($i = 0; $i < count($ary); $i++){
    for($j = 0; $j < count($ary[$i]); $j++){
        echo $ary[$i][$j] .  " ";
    }
    echo "<hr>";
}
?>        