<?php
$age =20;

function myFunc(&$age) {
    $age = 60;
    echo $age;
}
myFunc($age);
echo "<br>";
echo $age;
?>