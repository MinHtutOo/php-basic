<?php

$pass = "123123";
$pass = md5($pass); // can also use false and true beside variable
$pass = sha1($pass); // can also use false and true beside variable
$pass = crypt($pass,$pass); // (variable and crypt key)
echo $pass;

?>