<?php

$ary = array();

echo count($ary) . "<br>";
array_push($ary,"Kiwi");
array_push($ary,"Apple"); // insert data into array
array_push($ary,"Orange");
echo count($ary) . "<br>";
array_pop($ary); // delete the last element in array
echo count($ary) . "<br>";
array_shift($ary); // delete the first element in array
echo count($ary) . "<br>";

?>