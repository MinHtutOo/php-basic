<?php

$var = "Brighter Myanmar Ploop";

$bol = preg_match("/^$/",$var); // empty string

$bol = preg_match("/p\w{2,3}/i",$var);

echo $bol ? "TRUE" : "FALSE";

?>