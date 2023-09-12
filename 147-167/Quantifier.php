<?php
// p+ one or more p in string
// p* and p? zero or more p in string
// p{N} sequence of no. of p
// p{2,3} sequence of 2 or 3 p
// p{2,} sequence at least 2 p
$var = "Brighter Myanmar";

$bol = preg_match("/p+/",$var);

echo $bol ? "TRUE" : "FALSE";

?>