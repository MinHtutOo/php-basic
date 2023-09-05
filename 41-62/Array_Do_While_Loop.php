<?php

$bike = array("Fuji", "Giant", "Cannodale", "Raleigh");

$i = 0;
do{
    echo $bike[$i] . " Bike " . "<br>";
    $i++;
}while($i < count($bike));
?>