<?php
function doIt() {
    echo "I am doIt function";
}

$var = "doIt";
$bol = function_exists($var);

if($bol) {
    $var();
}else {
    echo "No function with that name!";
}
?>