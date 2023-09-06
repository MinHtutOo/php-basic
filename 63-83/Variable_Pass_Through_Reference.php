<?php
$a = 20;
$b = &$a;

$b =15;

echo "Value of A is " . $a;
echo "<br>";
echo "Value of B is " . $b;
?>