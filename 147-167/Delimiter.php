<?php

$var = "Brighter Myanmar";

// $bol = preg_match("/Bri/",$var);
// $bol = preg_match("%Bri%",$var);
// $bol = preg_match("+Bri+",$var);
// $bol = preg_match("!Bri!",$var);
// $bol = preg_match("#Bri#",$var);
$bol = preg_match("/bri/i",$var); // i make case sensitive to insensitive

echo $bol ? "TRUE" : "FALSE";

?>