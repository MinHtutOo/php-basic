<?php
# "" => False
# "0" => False
# Signed Integer => True
# Null Value => False
# Array without element => False

$bol1 = "100";
echo $bol1 ? "True" : "False";
echo "<br>";

$bol2 = "";
echo $bol2 ? "True" : "False";
echo "<br>";

$bol3 = "0";
echo $bol3 ? "True" : "False";
echo "<br>";

$bol4 = "+45";
echo $bol4 ? "True" : "False";
echo "<br>";

$bol5 = null;
echo $bol5 ? "True" : "False";
echo "<br>";

$bol6 = array();
echo $bol6 ? "True" : "False";