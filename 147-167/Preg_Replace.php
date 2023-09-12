<?php

// $var = "Brighter Myanmar Computer 1000";
// $result = preg_replace(
//     array('/computer/i', '/[0-9]+/'),
//     array('Copyright', '2011'),
//     $var
// );

// $var = "My Phone Number is 09 44 26 27 286";
// $result = preg_replace("/[[:alpha:]]/", "", $var);
// $phnum = preg_replace("/[[:space:]]/", "", $result);

$var = "Hello<span style='color:blue'>Guys</span>";
echo $var . "<br>";
$result = preg_replace("/<span style='color:blue'>(.*)<\/span>/", "", $var);
echo  $result;

?>