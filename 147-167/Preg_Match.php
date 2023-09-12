<?php

$var = "akira@gmail.com";

$result = preg_match("/^[a-zA-Z]+@[a-z]+\.[a-z]{3}$/",$var);

if($result) 
    echo "Your Email is {$var}" ;

?>