<?php

$str = "What are you doing.Why are you late.";

// strpos and strrpos are case sensitive functions

echo strlen($str) . "<br>";
echo strpos($str, "are") . "<br>";
echo strrpos($str, "are") . "<br>";
echo stripos($str, "Are") . "<br>";
echo strripos($str, "Are");
?>