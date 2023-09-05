<?php 
#Single code escaping
#Double code escaping
#Backslash scaping 
#Dollar sign escaping

$first_str = "there is a \"bad dog\" at the yard";
$second_str = "there is a \'bad dog\' at the yard";
$third_str = "there is a \\\bad dog at the yard";
$fourth_str = "there is a \$bad dog at the yard";

echo $first_str;
echo $second_str;
echo $third_str;
echo  $fourth_str;
?>