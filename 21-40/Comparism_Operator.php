<?php

$num_1 = 30;
$num_2 = "30";

//You can also use == !=  > < >= <=
//$bol = $num_1 == $num_2; // check only value
$bol = $num_1 === $num_2; // check both data-type and value

if($bol) {
    echo "It is true.";
}else {
    echo "It is false.";
}

?>