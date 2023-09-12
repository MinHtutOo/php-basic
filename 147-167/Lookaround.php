<?php

$str = "ABlC";

// $bol = preg_match('/A(?=B)/', $str); // positive look ahead
// $bol = preg_match('/(?<=B)C/', $str); // positive look behind
// $bol = preg_match('/A(?!B)/', $str); // negative look ahead
$bol = preg_match('/(?<!B)C/', $str); // negative look ahead

echo $bol ? "TRUE" : "FALSE";

?>