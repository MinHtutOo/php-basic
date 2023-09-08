<?php

$num = 500000;
$city = "Yangon";
$val = 50.5;
printf("There are %u of  people in %s. Double value is %f.",$num,$city,$val);


$file = "text.txt";
$h = fopen($file,'w');
fprintf($h ,"There are %u of people in %s.",$num,$city);

?>