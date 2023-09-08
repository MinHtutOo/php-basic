<?php

$file = "copy.json";
$h = fopen($file,'r');
$size = filesize($file);
$json = fread($h,$size);

$arys = json_decode($json);

foreach($arys as $keys=>$vals) {
    foreach($vals as $key=>$val){
        echo "Key is =>" . $key . " and value is =>" . $val . "<br>";
    }
}
?>