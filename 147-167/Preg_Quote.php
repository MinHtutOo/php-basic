<?php

$str = "There is a+ m@n in the house!";
echo $str . "<hr>";

$result = preg_quote($str, '@');
echo $result;

?>