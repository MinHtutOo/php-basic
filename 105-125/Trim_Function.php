<?php
$str = "   Hello/   ";

echo strlen($str) . "<br>";
$var1 = trim($str);
echo strlen($var1) . "<br>";
$var2 = rtrim($str);
echo strlen($var2) . "<br>";
$var3 = ltrim($str);
echo strlen($var3) . "<br>";

?>