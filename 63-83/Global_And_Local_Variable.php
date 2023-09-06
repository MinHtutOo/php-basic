<?php
$var = 10;

function doIt(){
    global $var;
    echo $var;
}
doIt();
?>