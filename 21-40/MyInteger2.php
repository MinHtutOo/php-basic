<?php
$amount = 2147483647;
echo $amount;
echo "<br>";

echo PHP_INT_MAX;
echo "<br>";

var_dump(PHP_INT_MIN);
echo "<br>";

$bol = is_int(PHP_INT_MIN);
var_dump($bol);
?>