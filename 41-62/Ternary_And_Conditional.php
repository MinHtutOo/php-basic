<?php
$name = "Mg Mg";
$age = 20;

if($name == "Mg Mg" && $age ==21) {
    echo "Name is Mg Mg and Age is 21";
}else if($name == "Mg g" and $age ==20) {
    echo "Name is Mg g and Age is 20";
}else if($name == "Aung Aung" or $age ==25) {
    echo "Name is Aung Aung and Age is 25";
}else if($name != "Mg Mg" || $age !=20) {
    echo "Name is not Mg Mg and Age is not 20";
}else {
    echo "Name is unknown and Age is unidentified";
}
?>