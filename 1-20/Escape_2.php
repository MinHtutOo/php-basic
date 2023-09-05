<?php
$first_str = "there is a need, \n there is a way";
$second_str = "there is a need, \t there is a way";
$third_str = "there is a need, \r there is a way";

header("Content-type:text/plain");
echo $first_str;
echo $second_str;
echo $third_str;
?>