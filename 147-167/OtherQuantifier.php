<?php

$var = "hello world";

// $bol = preg_match("/p.p/",$var);

//$bol = preg_match("/^.{2}$/",$var);

//$bol = preg_match("/<b>(.*)<\/b>/",$var);

//$bol = preg_match("/p(hp)*/",$var);

//$bol = preg_match("/\d/",$var);

//$bol = preg_match("/\w/",$var);

$bol = preg_match("/\s/",$var);

echo $bol ? "TRUE" : "FALSE";

?>