<?php

// $var = "13579";
// $bol = preg_match("/[0-9]/",$var);

// $var = "Hello";
// $bol = preg_match("/[x-z]/",$var);

// $var = "helloA";
// $bol = preg_match("/[A-Z]/",$var);

// $var = "1234A";
// $bol = preg_match("/[a-z] || [A-Z]/", $var);

// $var = "abcde";
// $bol = preg_match("/[^a-z]/",$var);

// $var = "yuki@gmail.com";
// $bol = preg_match("/[@]/",$var);

// $var = "Asd";
// $bol = preg_match("/^[A-Z]/",$var);

$var = "hello";
$bol = preg_match("/[^r-z]/",$var);

echo $bol ? "TRUE" : "FALSE";

?>